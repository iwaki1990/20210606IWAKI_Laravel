<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'content' => '本文',
        ];
        return view('hello.index', $data);
    }
}