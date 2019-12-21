<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class LoginController extends Controller
{
    public function log(){
        return view('login');
    }
    public function insert(Request $request){
        $obj=new User;
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->phone_number=$request->phone_number;
        $obj->username=$request->name;
        $obj->password=bcrypt($request->password);
        $obj->save();
        Auth::login($obj);
        return redirect('/');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::user($credentials)) {
            // Authentication passed...
            return redirect('');
        }
       
    }
    
   
}
