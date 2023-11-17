<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminControl extends Controller
{
    public function layout(){
        return view('layout.layout');
    }
}
