<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class LoginController extends Controller
{
    public function log(){
        return view('loginuser');
    }
    public function insert(Request $request){
        $obj=new User;
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->phone_number=$request->phone_number;
        $obj->username=$request->name;
        $obj->password=bcrypt($request->password);
        $obj->role_id=2;
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

    public function loginuser(Request $request)
    {
       
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // The user is being remembered...
            return redirect('/');
        }
        // return redirect('/');
    }





    public function switchoff(){
        // dd($requst->all());
        // return $request;

        Auth::logout();

        return redirect('/');
    }
    
   
}
