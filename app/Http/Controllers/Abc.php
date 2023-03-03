<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class Abc extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('index');
    }

    public function home(){
        return view('backend.index');
    }

    public function show(){
        return view('backend.show');
    }

    public function add(){
        return view('backend.add');
    }

    
    
}
