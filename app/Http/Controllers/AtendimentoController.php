<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atendimento;
use App\TipoAtendimento;

class AtendimentoController extends Controller
{
    public function create()
    {
        $tipos = TipoAtendimento::where('status',true)->get();
        return view('cadastrar_atendimento',compact('tipos'));
    }
    public function save(Request $request)
    {
        $erro = null;
        $mensagem = null;
        $atendimento = new Atendimento();
        $atendimento->client_name = $request->client_name;
        $atendimento->observation = $request->observation;
        $atendimento->execution_date = $request->execution_date;
        $atendimento->id_tipo_atendimento = $request->id_tipo_atendimento;
        $atendimento->id_tecnico = Auth()->user()->id;
       
        if($atendimento->save()) $mensagem = "Atendimento cadastrado com sucesso!";
        else $erro = "Falha ao cadastrar atendimento!";

        return redirect('home')->with('mensagem', $mensagem)->with('erro',$erro);
    }

    public function meus_atendimentos()
    {
       $atendimentos = Atendimento::where('id_tecnico',Auth()->user()->id)->get();
       return view('meus_atendimentos',compact('atendimentos'));
    }
}
