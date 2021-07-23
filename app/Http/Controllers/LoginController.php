<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use App\Models\company;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function register()
    {
        $company=company::all();
        return view('login.user_registration',['company'=>$company]);
    } 
    public function register_save(Request $request)
    {
       
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->company_id = $request->company;
        $user->contact =$request->contact;
        $user->save();
        return redirect('/registration');
    } 
    public function login(){
        return view('login.login');
    }
  
    

    
}