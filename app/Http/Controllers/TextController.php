<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;

class TextController extends Controller
{
	public function index(){
		$texts = Text::all();
		// dd($texts); // dump + die
		return view('texts.index', compact('texts'));
	}
	public function create(){
		return view('texts.create');
	}
}
