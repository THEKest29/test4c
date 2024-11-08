<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learns;

class LearnController extends Controller
{
    public function show() {
    $learns = Learns::orderBy('id', 'desc')->cursorPaginate(3);
    return view('index', compact('learns'));
}
    public function share() {
        
    }
}
