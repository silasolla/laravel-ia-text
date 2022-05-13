<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LectureController extends Controller
{
    public function index()
	{
        $user = Auth::user();
        $userId = Auth::id();

        // dd($user, $userId);
    }
}
