<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Mockery\Undefined;

class Api extends Controller
{
    public function index()
    {
        
        $response = Http::get('https://reqres.in/api/users');

        return view('users', ['users' => $response]);
    }

    public function show($id)
    {
        
        $response = Http::get('https://reqres.in/api/users/'.$id);

        return view('singleuser', ['singleuser' => $response]);
    }
}
