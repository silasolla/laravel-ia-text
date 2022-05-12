<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Models\Text;
use App\Models\User;

class TextController extends Controller
{
	public function index(){
		$userTexts = User::find(1)->texts;
		// dd($userTexts);

		$texts = Text::all();
		// dd($texts); // dump + die
		return view('texts.index', compact('texts'));
	}

	public function create(){
		return view('texts.create');
	}

    public function store(Request $request){
        $validated = $request->validate([
            'title'      => 'required|min:1|max:50',
            'content'    => 'required|max:1000',
			// 'email'      => 'required|email|unique:texts',
			// 'email'      => ['required', 'email', Rule::unique('texts')->ignore($request->id)],
			'email'      => ['required', 'email', Rule::unique('texts')->ignore($id)],
			'price'	     => 'required|integer',
			'is_visible' => 'required|boolean'
        ]);

        // dd($request);

        Text::create([
            'title'      => $request['title'],
            'content'    => $request['content'],
			'email'      => $request['email'],
			'price'      => $request['price'],
			'is_visible' => $request['is_visible']
        ]);

        session()->flash('flash_message', '登録しました');

        return redirect()->route('texts.index');
    }

    public function show($id){
        // dd($id);
        $text = Text::findOrFail($id);
        // dd($text);
        return view('texts.show', compact('text'));
    }

    public function edit($id){
		$text = Text::findOrFail($id);
		// dd($id);
        return view('texts.edit', compact('text'));
    }

    public function update(Request $request, $id){
		$validated = $request->validate([
            'title'      => 'required|min:1|max:50',
            'content'    => 'required|max:1000',
			'email'      => 'required|email|unique:texts',
			'price'	     => 'required|integer',
			'is_visible' => 'required|boolean'
        ]);

        $text = Text::findOrFail($id);
		// dd($id);
		$text->title      = $request['title'];
        $text->content    = $request['content'];
		$text->email      = $request['email'];
		$text->price      = $request['price'];
		$text->is_visible = $request['is_visible'];

        $text->save();

        return redirect()->route('texts.index');
    }

    public function delete($id){
		$text = Text::findOrFail($id)->delete();
		// dd($id);
        return redirect()->route('texts.index');
    }
}
