<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function insert(Request $request){
        $request->validate([
            'username' => 'required',
            'email'=> 'required|email|unique:registers,email',
            'password' => 'required'
        ]);
$register = new Register();
$register->username = trim($request->username);
$register->email = trim($request->email);
$register->password = trim(Hash::make($request->password));
$register->save();
return redirect('/')->with('success', 'Successfully created');
// return redirect('admin/subject/list')->with('success', 'Subject Successfully Updated');

    }

}
