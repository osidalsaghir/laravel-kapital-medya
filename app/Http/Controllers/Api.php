<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Mockery\Undefined;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;


class Api extends Controller
{
    public function index()
    {

        $response = Http::get('https://reqres.in/api/users');
        
        return view('users', [
            'users' => $response,
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }

    public function show($id)
    {

        $response = Http::get('https://reqres.in/api/users/' . $id);

        return view('singleuser', ['singleuser' => $response]);
    }

}
