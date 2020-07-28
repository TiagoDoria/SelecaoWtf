<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\TipoAtendimento;
use App\Atendimento;

use Illuminate\Support\Facades\DB;

class GestorController extends Controller
{
    public function listar_tecnicos()
    {
       $tecnicos = User::where('user_type',1)->get();
       return view('listar_tecnicos',compact('tecnicos'));
    }

    public function listar_tipos_atendimento()
    {
        $tipos = TipoAtendimento::all();
        return view('listar_tipos_atendimento',compact('tipos'));
    }

    public function deletar_tipo_atendimento($idTipo)
    {
       $tipo = TipoAtendimento::find($idTipo);
       $tipo->delete();
       return redirect('listar_tipos_atendimento');
    }

    public function ativar_tipo_atendimento($idTipo)
    {
        $data = [
           'status'=>true
        ];

        $tipo = DB::table('tipo_atendimento')
        ->select('tipo_atendimento.*')->where('tipo_atendimento.id',$idTipo)
        ->update($data);

        return redirect('listar_tipos_atendimento');
    }

    public function desativar_tipo_atendimento($idTipo)
    {
        $data = [
            'status'=>false
         ];
 
         $tipo = DB::table('tipo_atendimento')
         ->select('tipo_atendimento.*')->where('tipo_atendimento.id',$idTipo)
         ->update($data);
 
         return redirect('listar_tipos_atendimento');
    }

    public function consultar_tipo_atendimento($idTipo)
    {
        $tipo = TipoAtendimento::find($idTipo);
        return view('consultar_tipo_atendimento', compact('tipo'));
    }

    public function ativar_tecnico($idTecnico)
    {
        $data = [
           'status'=>true
        ];

        $tipo = DB::table('users')
        ->select('users.*')->where('users.id',$idTecnico)
        ->update($data);

        return redirect('listar_tecnicos');
    }

    public function desativar_tecnico($idTecnico)
    {
        $data = [
            'status'=>false
         ];
 
         $tipo = DB::table('users')
         ->select('users.*')->where('users.id',$idTecnico)
         ->update($data);
 
         return redirect('listar_tecnicos');
    }

    public function deletar_tecnico($idTecnico)
    {
       $tecnico = Users::find($idTecnico);
       $tecnico->delete();
       return redirect('listar_tecnicos');
    }

    public function consultar_tecnico($idTecnico)
    {
        $tecnico = User::find($idTecnico);
        return view('consultar_tecnico', compact('tecnico'));
    }

    public function gerar_relatorio()
    {
        $atendimentos = Atendimento::with('tipo')->with('tecnico')->paginate(50);

        return view('relatorio',compact('atendimentos'));

    }
}
