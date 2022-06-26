<?php

namespace App\Http\Controllers;

use App\Models\Residente;
use App\Http\Requests\GuardarResidenteRequest;
use App\Http\Requests\ActulizarResidenteRequest;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\DB;
use Classes\Paginador;



class APIController extends Controller
{

    //OBTENER TODOS LOS REGISTRO
    public function index()
    {
        return Residente::all();
    }

    //GUARDAR UN REGISTRO
    public function store(GuardarResidenteRequest $request)
    {
        try {
            //Insertar un registro
            Residente::create($request->all());
            return respuesta(true, 'Residente guardado correctamente');
        } catch (\Throwable $th) {
            return respuesta(false, "Error: Error al insertar un registro", 400);
        }
    }

    //ACTUALIZAR UN REGISTRO
    public function update(ActulizarResidenteRequest $request, Residente $residente)
    {
        try {
            //Actualizar un registro
            $residente->update($request->all());
            return respuesta(true, 'Residente Actualizado Correctamente', 201);
        } catch (\Throwable $th) {
            return respuesta(false, "Error: Error al Actualizar un registro", 400);
        }
    }

    //ELIMINAR UN REGISTRO
    public function destroy(Residente $residente)
    {
        try {
            //Eliminar un registro
            $residente->delete();
            return respuesta(true, 'Residente Eliminado Correctamente');
        } catch (\Throwable $th) {
            return respuesta(true, 'Error: Error al Eliminar un registro', 400);
        }
    }

    //MOSTRAR UN REGISTRO POR ID
    public function show(Residente $residente)
    {
        return respuesta(true, $residente, 201);
    }


    //MOSTRAR UN REGISTRO POR NOMBRE
    public function name(string $nombre)
    {
        $residente = DB::table('residentes')->where('nombre', $nombre)->get();
        $respuesta = json_decode($residente);

        if (empty($respuesta)) {
            return respuesta(false, 'Residente no encontrado', 404);
        }

        return respuesta(true, $residente);
    }

    //MOSTRAR UN REGISTRO POR EMAIL
    public function email(string $correo)
    {
        $residente = DB::table('residentes')->where('correo', $correo)->get();
        $respuesta = json_decode($residente);

        if (empty($respuesta)) {
            return respuesta(false, 'Residente no encontrado', 404);
        }

        return respuesta(true, $residente);
    }


    //FILTRA DE EL NOMBRE DE LA A LA Z
    public function filter(string $letra)
    {
        $residente = DB::table('residentes')->where('nombre', 'like', $letra . '%')->get();
        $respuesta = json_decode($residente);

        if (empty($respuesta)) {
            return respuesta(false, 'Residente/s no encontrado', 404);
        }

        return respuesta(true, $residente);
    }

    //FILTRA DE LA EDAD DE MAYOR A MENOR
    public function down($edad)
    {
        $residente = DB::table('residentes')->where('edad', '<=', $edad)->orderBy('edad', 'DESC')->get();
        $respuesta = json_decode($residente);

        if (empty($respuesta)) {
            return respuesta(false, 'Residente/s no encontrado', 404);
        }

        return respuesta(true, $residente);
    }

    //PAGINADO DE LA PAGINA
    public function paginado($pagina)
    {
        $residente = DB::table('residentes')->orderBy('id', 'DESC')->get();
        $respuesta = json_decode($residente);

        if (!is_numeric($pagina)) {
            return respuesta(false, 'Pagina no encontrada', 404);
        }

        $paginado = new Paginador($respuesta, $pagina);
        $arregloPaginado = $paginado->paginar();

        if (empty($arregloPaginado)) {
            return respuesta(false, 'Pagina no encontrada', 404);
        }

        return respuesta(true, $arregloPaginado);
    }
}
