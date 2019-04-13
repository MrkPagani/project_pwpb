<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpesialisController extends Controller
{
    public function index()
    {
      
      return view('spesialis.home-spesialis');
