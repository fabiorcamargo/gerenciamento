<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    public function getAllUsers(Request $request){
       // $students = User::get()->toJson(JSON_PRETTY_PRINT);
        
        $bodyContent = $request->getContent();
        $explode_id = json_decode($request->getContent(), true);
        Storage::disk('local')->put('example.txt', $explode_id['event_id']);
        return response($explode_id['event_id'], 200);
       
      }

}
