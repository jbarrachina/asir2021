<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AlumneModel;
use App\Models\GrupModel;

class Home extends Controller
{
    public function index()
    {
        return view('welcome_message');
    }
    
    public function bienvenida($saludo, $saluda='lo que sea'){
        $tonto = 2;
        var_dump($tonto);
        echo "Hola $saludo y $saluda";
        echo "<a href='http://localhost:8080/codeigniter/index.php/home/alumnos'>";
        echo "Listado de Alumnos";
        echo "</a>";
    }
    
    public function alumnes(){
        $alumnes = new AlumneModel();
        $datos['alumnes'] =  $alumnes->findAll();
        echo view('alumnes/llista', $datos);
    }
    
    public function alumnes_grup($id){
        $alumnes = new AlumneModel();
        $datos['alumnes'] =  $alumnes->where(['id'=>$id])->findAll();
        echo view('alumnes/llista', $datos);
    }
    
    public function grups(){
        $grups = new GrupModel();
        $datos['grups'] =  $grups->findAll();
        /*echo '<pre>';
        print_r($datos);
        echo '</pre>';*/
        echo view('grups/llista', $datos);
    }
}
