<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoAtendimento;

class TipoAtendimentoController extends Controller
{

    public function create()
    {
        return view('cadastrar_tipo_atendimento');
    }
    public function save(Request $request)
    {
        $erro = null;
        $mensagem = null;
        $tipo = new TipoAtendimento();
        $tipo->name = $request->name;
       
        if($tipo->save()) $mensagem = "Tipo de atendimento cadastrado com sucesso!";
        else $erro = "Falha ao cadastrar tipo de atendimento!";

        return redirect('home')->with('mensagem', $mensagem)->with('erro',$erro);
    }

}
