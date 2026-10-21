<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alimentos;
use Exception;
use Illuminate\Database\QueryException;
use Exeception;

class AlimentosController extends Controller
{
    public function listarAlimentos(){
          try{
            $alimentos = Alimentos::all();
            
            return response()->json($alimentos,200);


        }catch(Exception $e) {
            return response()->json([
                "message" => "Erro ao listar alimentos",
                "error" => $e->getMessage()
            ],500);
        }

    }

    public function criarAlimentos(Request $request){
        try{
            $request->validate([
                'nomeAlimento' => 'required|string|max:100',
                'tipoAlimento' => 'required|string|max:50',
                'quantidade' => 'required|integer',
            ]);

            $alimento = Alimentos::create($request->all());

            return response()->json([
                'message' => 'Alimento cadastrado com sucesso',
                'data'=> $alimento,
            ],201);



        }catch(Exception $e) {
            return response()->json([
                "message" => "Erro ao cadastrar alimentos",
                "error" => $e->getMessage()
            ],500);
        }


    }

    public function atualizarAliemntos(Request $request){
        $id = $request->input('alimento_id');
    
        try{
            $request->validate([
                'nomeAlimento' => 'required|string|max:100',
                'tipoAlimento' => 'required|string|max:50',
                'quantidade' => 'required|integer',
            ]);

            $alimento = Alimentos::find($id);
            if (!$alimento) {
                return response()->json(["message" => "Alimento não encontrado"], 404);
            }

            $alimento->update($request->all());

        }catch(Exception $e) {
            return response()->json([
                "message" => "Erro ao cadastrar alimentos",
                "error" => $e->getMessage()
            ],500);
        }



    }
    public function deletarAlimentos(Request $request){
        $id = $request->input('alimento_id');
        try{
            $alimento = Alimentos::find($id);
            if(!$alimento){
                return response()->json(["message"=>"Alimento não encontrado"],404);
            }

        }catch(Exception $e) {
            return response()->json([
                "message" => "Erro ao cadastrar alimentos",
                "error" => $e->getMessage()
            ],500);
        }
     

    }

}
