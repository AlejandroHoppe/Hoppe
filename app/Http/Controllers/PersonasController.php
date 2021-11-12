<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonasController extends Controller
{
    public function crear(Request $req)
    {
    	$datos = $req->getContent();

    	//Validar el json

    	$datos = json_decode($datos); //Se interpreta como objeto. Se puede pasar un parametro para que en su lugar lo devuelva como array.

    	//Validar los datos

    	$persona = new Persona();

    	$persona->nombre = $datos->nombre;
    	$persona->dni = $datos->dni
    	$persona->telefono = $datos->telefono;
    	$persona->direccion = $datos->direccion;

    	if (isset($datos->email)) {
    		$persona->email = $datos->email;
    	}
    	try {
    		$persona->save();
    	} catch (\Exception $e) {
    		die("ROTO");
    		die($e->getMessage());//Para pillar el error por postman
    	}

    	die("Va joya");
    	

    }
}
