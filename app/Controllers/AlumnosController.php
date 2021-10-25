<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AlumnesModel;

/**
 * Description of AlumnosController
 *
 * @author depinf
 */
class AlumnosController extends Controller{
    public function index(){
        $datos['titol'] = "Llistat de tots els Alumnes";
        $alumnos = new AlumnesModel();
        $datos['alumnes'] = $alumnos
                ->orderBy('apellido1, apellido2')
                ->findAll();
        echo view('alumnes/llista',$datos);
    }
    
    public function grup($grup='2CFSS'){
        $datos['titol'] = "Llistat d'Alumnes del Grupo $grup";
        $alumnos = new AlumnesModel();
        $datos['alumnes'] = $alumnos
                ->select("CONCAT(alumnos.apellido1,' ',alumnos.apellido2,', ',alumnos.nombre) as nombre_completo")
                ->select('alumnos.id, alumnos.NIA, alumnos.email, matricula.estado')
                ->join('matricula','matricula.NIA=alumnos.NIA','LEFT')
                ->where(['matricula.grupo'=>$grup])
                ->orderBy('nombre_completo')
                ->findAll();
        /*echo '<pre>';
        print_r($datos);
        echo '</pre>';*/
        echo view('alumnes/llistagrup',$datos);
    }
}
