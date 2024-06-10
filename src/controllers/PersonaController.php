<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use Empresa\App\Core\Controller;
use Empresa\App\Models\Auto;
// use Empresa\App\Models\Persona as P;


class PersonaController extends Controller
{
    public function index()
    {
        echo 'Welcome to the Home Page!';
    }
    public function nuevo()
    {
        //var_dump($_GET);
        //formulario de autos
        $this->render('persona/nuevo');
    }
    public function crear()
    {
        try {
            //code...
            $mensaje = "defecto";
            $nombre = $_POST['nombre'] ?? '';
            $apellido = $_POST['apellido'] ?? '';
            $correo = $_POST['correo'] ?? '';
            $fecha = $_POST['fecha'] ?? '';
            $tel = $_POST['tel'] ?? '';
            $genero = $_POST['genero'] ?? '';
            $pais = $_POST['pais'] ?? '';

            // Crear instancia de Auto
            $persona = new \Empresa\App\Models\Persona(
                nombre: $nombre,
                apellido: $apellido,
                email: $correo,
                fechaNac: $fecha,
                numero: $tel,
                genero: $genero,
                pais: $pais
            );

            // Insertar en la base de datos
            if ($persona->insertar()) {
                $mensaje = "La persona ha sido registrada con éxito.";
            } else {
                $mensaje = "Error al registrar la persona.";
            }
            //code...


            // Insertar en la base de datos

            $this->render('persona/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            //throw $th;
        }

        //throw $th;

    }
    public function modificar()
    {
        $mensaje = "";
        try {
            //code...

            $id = (int) $_POST['id'] ?? '';
            $marca = $_POST['marca'] ?? '';
            $modelo = $_POST['modelo'] ?? '';
            $fechaCompra = $_POST['fechaCompra'] ?? '';
            // Crear instancia de Auto
            $auto = new Auto(
                id: $id,
                marca: $marca,
                modelo: $modelo,
                fechaCompra: $fechaCompra
            );

            // Insertar en la base de datos
            if ($auto->modificar()) {
                $mensaje = "El auto ha sido modificado con éxito.";
            } else {
                $mensaje = "Error al modificar el auto.";
            }
            $this->render('autos/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function borrar()
    {
        $mensaje = "";
        try {
            //code...

            $id = (int) $_POST['id'] ?? '';
            // Crear instancia de Auto
            // Insertar en la base de datos
            if (Auto::borrar($id)) {
                $mensaje = "El auto ha sido borrado con éxito.";
            } else {
                $mensaje = "Error al borrar el auto.";
            }
            $this->render('autos/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function listar()
    {
        try {
            $autos = Auto::listar();
            $this->render('autos/listar', ["autos" => $autos]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function editar()
    {

        try {
            //code...
            $id = (int)$_GET['id'] ?? '';
            $auto = Auto::obtenerPorId($id);
            // Insertar en la base de datos
            $this->render('autos/editar', ["auto" => $auto]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
