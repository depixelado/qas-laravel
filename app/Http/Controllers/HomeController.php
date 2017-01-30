<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numQuestions = 8;
        $numUsers = 5;

        $questions  = Question::with(['user','answers'])
            ->orderBy('id', 'desc')
            ->take($numQuestions)
            ->get();

        $users      = User::orderBy('id', 'desc')->take($numUsers)->get();

        return view('home', compact(['questions', 'users']));
    }
}
