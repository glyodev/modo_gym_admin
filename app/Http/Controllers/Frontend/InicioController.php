<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Asistencia;
use App\Models\Costos;
use App\Models\InformacionEmpresa;
use App\Models\Pagos;
use App\Models\Usuarios;
use Carbon\Carbon;

class InicioController extends Controller
{
    public function index()
    {
        $info = InformacionEmpresa::first();
        if (! $info) {
            $info = [];
        }

        $info['miembros'] = Usuarios::where('usu_estado', 'ACTIVO')->count();

        $asistencias = Asistencia::orderBy('asistencia_fecha', 'ASC')
            ->orderBy('usu_id')
            ->orderBy('asistencia_hora')
            ->get();
        $totalMin      = 0;
        $entrada       = null;
        $ultimaFecha   = null;
        $ultimoUsuario = null;
        foreach ($asistencias as $a) {
            $fecha = trim($a->asistencia_fecha);
            $hora  = trim($a->asistencia_hora);
            $hora  = Carbon::createFromFormat('d/m/Y H:i:s', "$fecha $hora");
            if (($ultimoUsuario !== null && $ultimoUsuario != $a->usu_id) ||
                ($ultimaFecha !== null && $ultimaFecha != $a->asistencia_fecha)) {
                if ($entrada) {
                    $ultimaFecha   = trim($ultimaFecha);
                    $salidaDefault = Carbon::createFromFormat('d/m/Y H:i:s', "$ultimaFecha 22:00:00");
                    $totalMin += $entrada->diffInMinutes($salidaDefault);
                    $entrada = null;
                }
            }
            if ($a->asistencia_tipo === 'ENTRADA') {
                $entrada = $hora;
            }
            if ($a->asistencia_tipo === 'SALIDA' && $entrada) {
                $totalMin += $entrada->diffInMinutes($hora);
                $entrada = null;
            }
            $ultimaFecha   = $a->asistencia_fecha;
            $ultimoUsuario = $a->usu_id;
        }
        if ($entrada) {
            $salidaDefault = Carbon::createFromFormat('d/m/Y H:i:s', "$ultimaFecha 22:00:00");
            $totalMin += $entrada->diffInMinutes($salidaDefault);
        }
        $info['horas']  = $totalMin / 60;
        $info['pagos']  = Pagos::distinct('usu_id')->count('usu_id');
        $info['costos'] = Costos::where('estado', 'ACTIVO')->count();

        // $ejercicios = Ejercicios::where('ejer_estado', 'ACTIVO')
        //     ->inRandomOrder()
        //     ->limit(5)
        //     ->get();
        $costos = Costos::where('estado', 'ACTIVO')->get();

        return view('frontend.pages.inicio', compact('info', 'costos'));
    }
}
