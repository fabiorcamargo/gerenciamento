<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    public function getAllUsers(Request $request) {
        $students = User::get()->toJson(JSON_PRETTY_PRINT);
        Storage::disk('local')->put('example.txt', "$request");
        return response($students, 200);
       
      }

}
