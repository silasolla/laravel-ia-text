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
            'content' => 'required|max:1000',
			'email'   => 'required|email|unique:texts',
			'price'	  => 'required|integer',
			'is_visible' => 'required|boolean'
        ]);

        // dd($request);

        Text::create([
            'title'   => $request['title'],
            'content' => $request['content'],
			'email'   => $request['email'],
			'price'   => $request['price'],
			'is_visible' => $request['is_visible']
        ]);

        session()->flash('flash_message', '登録しました');

        return redirect()->route('texts.index');
    }

    public function edit($id){
		$text = Text::findOrFail($id);
		// dd($id);
        return view('texts.edit', compact('text'));
    }

    public function update(Request $request, $id){
        $text = Text::findOrFail($id);
		// dd($id);
        $text->name  = $request['name'];
        $text->email = $request['email'];

        $text->save();

        return redirect()->route('texts.index');
    }

    public function delete($id){
		$text = Text::findOrFail($id)->delete();
		// dd($id);
        return redirect()->route('texts.index');
    }
}
