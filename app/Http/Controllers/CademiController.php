<?php

namespace App\Http\Controllers;

use App\Models\Cademi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CademiController extends Controller
{

    public function __construct(Cademi $cademi, User $user)
    {
        $this->cademi = $cademi;
        $this->user = $user;
    }

    public function create($userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        $payload = [
            "token" => "9c99b1e6faf00591827b268778f90dcf",
            "codigo"=> "b123",
            "status"=> "aprovado",
            "produto_id"=> "novo1",
            "cliente_email"=> "teste@teste.com.br",
            "cliente_nome"=> "Evandro Miranda",
            "cliente_doc"=> "123.123.123-12",
            "cliente_celular"=> "5511991232020",
            "cliente_endereco_cidade"=> "Santos",
            "cliente_endereco_estado"=> "SP",
            "cliente_endereco_cep"=> "11600-00",
        ];
        //Cria um novo aluno na cademi

        $response =(Http::post("https://profissionaliza.cademi.com.br/api/postback/custom", $payload));
        $data = dd($response);
    }
    

}