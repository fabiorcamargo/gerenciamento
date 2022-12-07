<?php

namespace App\Http\Controllers\Asaas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CodePhix\Asaas;
use CodePhix\Asaas\Asaas as AsaasAsaas;
use Illuminate\Support\Facades\Http;

class AsaasController extends Controller
{
    public function asaascliente(){
        $asaas = new AsaasAsaas(env('ASAAS_TOKEN'), env('ASAAS_TIPO'));
            $asaas->Cliente()->getAll();
            $clientes = $asaas->Cliente()->getAll();
            dd($clientes->data[3]->name);

       

    }

    public function cademi(){
        $header = $headers = [
            'Authorization' => '1914b4c0-fd40-4f1f-a46f-02ae149291f0'
        ];
        $recorded =(Http::withToken('1914b4c0-fd40-4f1f-a46f-02ae149291f0')->get('https://profissionaliza.cademi.com.br/api/v1/usuario'));
        
        dd($recorded->object()->data->usuario);

    }

    public function cademiall()
    {
        //Lista Todos os clientes Cademi
        $header = $headers = [
            'Authorization' => '1914b4c0-fd40-4f1f-a46f-02ae149291f0'
        ];
        $recorded =(Http::withToken('1914b4c0-fd40-4f1f-a46f-02ae149291f0')->get('https://profissionaliza.cademi.com.br/api/v1/usuario'));
        
        dd($recorded->object()->data->usuario);
    }

    public function cademione($id)
    {
        //Cria um novo aluno na cademi
        $header = $headers = [
            'Authorization' => '1914b4c0-fd40-4f1f-a46f-02ae149291f0'
        ];
        $recorded =(Http::withToken('1914b4c0-fd40-4f1f-a46f-02ae149291f0')->get("https://profissionaliza.cademi.com.br/api/v1/usuario$id"));
        
        dd($recorded->object()->data->usuario);
    }

    public function cademinew($data)
    {
        //Cria um novo aluno na cademi
        $header = $headers = [
            'Authorization' => '1914b4c0-fd40-4f1f-a46f-02ae149291f0'
        ];
        $recorded =(Http::withToken('1914b4c0-fd40-4f1f-a46f-02ae149291f0')->get("https://profissionaliza.cademi.com.br/api/v1/usuario$data"));
        
        dd($recorded->object()->data->usuario);
    }
}
