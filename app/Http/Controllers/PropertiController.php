<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use App\Models\Tim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Stringable;

class PropertiController extends Controller
{
    public function index()
    {
        $properti = Properti::all();
        $tim = Tim::all();
        
        return view('/index',compact('properti','tim'));
        
    }
   

}
