<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        $nome = 'João Silva';
        return view('perfil', compact('nome'));
    }
}