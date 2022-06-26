<?php

function debuguear($variable): string
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function respuesta($res, $msg, $estado = 200)
{
    $respuesta = response()->json([
        'res' => $res,
        'msg' => $msg
    ], $estado);

    return $respuesta;
}
