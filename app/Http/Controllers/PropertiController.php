<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Stringable;

class PropertiController extends Controller
{
    public function index()
    {
        $properti = Properti::all();
        return view('/index',compact('properti'));

    }


}
