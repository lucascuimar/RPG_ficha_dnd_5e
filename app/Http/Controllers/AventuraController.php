<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AventuraController extends Controller
{
    public function index(Request $request){
      return view('index');
    }

    public function lista_aventura(Request $request){
      return view('aventuras.lista_aventura');
    }
}
