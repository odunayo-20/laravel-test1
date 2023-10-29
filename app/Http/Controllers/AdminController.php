<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //

    public function login(){
        return view('admin.login');
    }

    public function register(){
        return view('auth.register');
    }
// storing of data
    public function insert(Request $request){
        $request->validate([
            'username' => 'required',
            'email'=> 'required|email|unique:registers,email',
            'password' => 'required'
        ]);

$user = new User;
$user->name = trim($request->username);
$user->email = trim($request->email);
$user->password = trim(Hash::make($request->password));
$user->save();
return redirect('/')->with('success', 'successfully created');
    }

    public function list(){
        $data['getRecord'] = User::getRecord();
        return view('admin.admin.list', $data);
    }

public function add(){
    return view('admin.admin.add');
}

public function adminInsert(Request $request){
$request->validate([
    "name" => "required",
    "email" => "required|unique:users,email",
    "password" => "required"
]);

$user = new User();
$user->name = trim($request->name);
$user->email = trim($request->email);
$user->password = trim(Hash::make($request->email));
$user->save();
return redirect('admin/list')->with('success', 'Successfully Created');
}
    public function edit($id){
        $data['getSingle'] = User::getSingle($id);
if(!empty($data['getSingle'])){

    return view('admin.admin.edit', $data);
}else{
    abort(404);
}
    }

    public function update($id, Request $request){
        $user = User::getSingle($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect('admin/list')->with('success', 'Successfully Updated');
    }

    public function delete($id){
        $user = User::getSingle($id);
        $user->delete();
        return redirect('admin/list')->with('success', 'Successfully Deleted');
    }

}
