<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Lecture;
use App\Models\User;

class LectureController extends Controller
{
    public function index()
	{
        // $authUser   = Auth::user();
        // $authUserId = Auth::id();
        // dd($user, $userId);
		
		$user = User::findOrFail(Auth::id());
		// dd($user); 
		// dd($user->lectures);
		// foreach ($user->lectures as $lecture){
		//   dd($lecture->name);
		// }
		
		return view('lectures.index', compact('user'));
    }
}
