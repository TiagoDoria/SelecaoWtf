<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class GestorController extends Controller
{
    public function listar_tecnicos()
    {
       $tecnicos = User::where('user_type',1)->get();
       return view('listar_tecnicos',compact('tecnicos'));
    }
}
