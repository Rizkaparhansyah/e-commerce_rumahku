<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use Illuminate\Http\Request;

class TimController extends Controller
{
    public function index()
    {
        $tim = Tim::all();
        
        return view('/index',compact('tim'));
    }

}