<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
 public function master(){
    return view('layouts.master');
 }
 public function table(){
    return view('table');
 }
}
