<?php

namespace App\Http\Controllers;
use App\Models\Tipe;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    public function index()
    {
        $tipe = Tipe::all();
        return view('/index',compact('tipe'));

    }
}
