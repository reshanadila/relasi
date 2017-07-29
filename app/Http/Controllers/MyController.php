<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orangtuaaa;
use App\Anak;
class MyController extends Controller
{
    //
    public function index()
    {
    	$a = "Resha Nadila";
    	return "Nama saya adalah <b>".$a."</b>";
    }
      public function tampilan()
    {
    	return view('about');
    }
      public function tampilanmodel()
    {
    	$ortu =Orangtuaaa::all();
    	$anak =Anak::all();
    	return view('about',compact('ortu','anak'));
    }
}
