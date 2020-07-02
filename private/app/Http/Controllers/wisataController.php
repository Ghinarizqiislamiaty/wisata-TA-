<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;

class WisataController extends Controller
{
	public function index(){
		$posts = Wisata::all();
		return view('wisata.index', compact('posts'));
		
	}
    
}
