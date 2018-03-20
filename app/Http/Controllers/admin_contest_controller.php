<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;

class admin_contest_controller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkadmin');
    }
    public function index(Question $questioncurrent){

    	$questions = Question::all();
    	return view('AdminContest',compact('questions'),compact('questioncurrent'));
    }

    public function change(Request $request){
    	var_dump($request->id);
    	///Doi cau hoi hien tai trong table contest
    	///
    	$questioncurrent = new Question;
        $questioncurrent = $request;
    	return $this->index($questioncurrent);
    }
}
