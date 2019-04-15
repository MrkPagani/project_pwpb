<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempatTidurController extends Controller
{
    public function index(){
        return view('tempat-tidur.main-tempat-tidur');
    }

    public function input(){
        return view('tempat-tidur.form-tempat-tidur');
    }
}
