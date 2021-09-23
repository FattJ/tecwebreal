<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $nombre = 'Fatima';
    
    
        return view('index')
        ->with('nombre', $nombre);
    
}
    public function detalle(){
        $nombre ='Fatima';
        $apellido ='Jaime';
        $tel = '4773043441';
        $email = 'fattjaime@outlook.com';

        return view('detalle')
        ->with('nombre', $nombre)
        ->with('apellido', $apellido)
        ->with('tel', $tel)
        ->with('email', $email);
    

}
}