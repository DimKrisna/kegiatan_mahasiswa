<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KemahasiswaanController extends Controller
{
    public function admin()
        {
            return view('home_admine');
        }
    }
