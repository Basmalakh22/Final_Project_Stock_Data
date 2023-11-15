<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{

   public function __construct() {
    //     $this->middleware("auth")
    //    // ->except('index')
    //    // ->only('index');

    }
    // any controllers have actions = methods
    public function index(){
        // return response => view , json , redirect , file

        $user = Auth::user();

        $user = 'Basmala Khaled';
        $title = 'store';

        // compact is a built in function returning array with keys and values
        return view('dashboard.index',compact('user','title'));

        // use compact function rather than create array
        // return view('dashboard',[
        //     'user' => 'basmala khaled',
        //       'title' => 'store'
        // ]);

        // we can use with
        // return view('dashboard')->with([
        //     'user'=> $user,
        //     'title'=>$title
        // ]);

        // we can use view facades
        // return View::make('dashboard',[
        //         'user' => 'basmala khaled',
        //         'title' => 'store' ]);

    }
}
