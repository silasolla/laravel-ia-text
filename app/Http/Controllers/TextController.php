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
    public function store(Request $request){
        $validated = $request->validate([
            'title'   => 'required|min:1|max:50',
            'content' => 'required|min:0|max:10000'
        ]);

        // dd($request);

        Text::create([
            'title'   => $request['title'],
            'content' => $request['content']
        ]);

        session()->flash('flash_message', '登録しました');

        return redirect()->route('texts.index');
    }
}
