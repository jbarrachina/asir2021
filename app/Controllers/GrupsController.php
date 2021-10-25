<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\GrupsModel;

/**
 * Description of GrupsController
 *
 * @author depinf
 */
class GrupsController extends Controller {
     public function index(){
         $datos['titol'] = "Llistat de Grups";
         $grups = new GrupsModel();
         $datos['grups'] = $grups->findAll();
         echo view('grups/llista',$datos);
     }
}
