<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index() {
        $aluno = new Aluno();
        $alunos = Aluno::All();
        return view("aluno.index", [
            "aluno" => $aluno,
            "alunos" => $alunos
        ]);
    }

    public function salvar(Request $request){
        if($request->get("id")==""){
            $aluno = new Aluno();
        }else{
            $aluno = Aluno::Find($request->get("id"));
        }
        $aluno->nome = $request->get("nome");
        $aluno->email = $request->get("email");
        $aluno->genero = $request->get("genero");
        $aluno->obs = $request->get("obs");
        $aluno->save();
        return redirect("/aluno");
    }

    public function excluir($id){
        Aluno::Destroy($id);
        return redirect("/aluno");
    }

    public function editar($id){
        $aluno = Aluno::find($id);
        $alunos = Aluno::all();

        return view("aluno.index", [
            "aluno" => $aluno,
            "alunos" => $alunos
        ]);
    }
}
