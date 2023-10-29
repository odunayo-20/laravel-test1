<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

        // login data

        public function AuthLogin(Request $request){
            if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password])){
               return redirect('admin/dashboard')->with('success', 'Successfully Created');
            }else{
                return redirect('/')->with('error', 'not success');
            }
        }

        public function AuthLogout(){
            Auth::logout();
            return redirect('');
        }

}
