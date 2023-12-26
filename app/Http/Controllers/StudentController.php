<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function register(){
        return view('register');
    }
    public function create(Request $request){
        // print_r($request->all());
        $request->validate([
            'email'   => 'required | email',
            'name'    => 'required',
            'password'=> 'required',
         ]);
        // return view('register');
    }
}








