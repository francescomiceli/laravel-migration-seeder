<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\train;
class TrainController extends Controller
{
    public function index(){
        $treniOdierni = train::where('Data_partenza' , '2022-11-06') -> get();
        return view('welcome', compact('treniOdierni'));
    }

}
