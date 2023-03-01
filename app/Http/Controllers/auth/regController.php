<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Hash;

class regController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request ){
        // dd( $request->only('email',  'password'));
        $request->validate([
           'name'=>'required|max:225',
           'username'=>'required|max:225',
           'email'=>'required|email|max:225',
           'password'=>'required|confirmed'

        ]);

       user::create([
        'name'=>$request->name,
        'username' => $request->username,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),

       ]);

       auth()->attempt($request->only('email',  'password'));

       return redirect()->route('dashboard');
       
    } 
}
