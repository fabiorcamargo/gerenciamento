<?php

namespace App\Http\Controllers\Asaas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CodePhix\Asaas;
use CodePhix\Asaas\Asaas as AsaasAsaas;
use Illuminate\Support\Facades\Http;

class AsaasController extends Controller
{
    public function client(){
        $asaas = new AsaasAsaas('$aact_YTU5YTE0M2M2N2I4MTliNzk0YTI5N2U5MzdjNWZmNDQ6OjAwMDAwMDAwMDAwMDAwMDYwMjY6OiRhYWNoX2VhNzFmMTk4LTliZmMtNGEyMS04OTk2LTZiZjk2MTUzMGEwNw==', 'homologacao');
            $asaas->Cliente()->getAll();
            $clientes = $asaas->Cliente()->getAll();
            dd($clientes->data[3]->name);

       

    }

    public function aluno(){
        $header = $headers = [
            'Authorization' => '1914b4c0-fd40-4f1f-a46f-02ae149291f0'
        ];
        $recorded =(Http::withToken('1914b4c0-fd40-4f1f-a46f-02ae149291f0')->get('https://profissionaliza.cademi.com.br/api/v1/usuario'));
        
        dd( $recorded->object()->data);
        

        


    }
}
