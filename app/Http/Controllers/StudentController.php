<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    //

    protected function list()
    {
        $data['getRecord'] = Student::getRecord();
        return view('admin.student.list', $data);
    }

    protected function add()
    {
        return view('admin.student.add');
    }

    protected function insert(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required',
            'thumbnail' => 'required',
        ]);

        $student = new Student();
        $student->firstname = trim($request->firstname);
        $student->lastname = trim($request->lastname);
        $student->email = trim($request->email);
        $student->phone = trim($request->phone);
        if (!empty($request->file('thumbnail'))) {
            $ext = $request->file('thumbnail')->getClientOriginalExtension();
            $file = $request->file('thumbnail');
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $ext;
            $file->move('protected/upload/student/', $filename);
            $student->thumbnail = $filename;
        }
        $student->save();
        return redirect('admin/student/list')->with('success', 'student successfully Added');
    }

    protected function edit($id)
    {
        $data['getSingle'] = Student::getSingle($id);

        if (!empty($data['getSingle'])) {
            return view('admin.student.edit', $data);
        }else{
            abort(404);
        }
    }

    protected function update($id, Request $request){
        $student = Student::getSingle($id);
        $student->firstname = trim($request->firstname);
        $student->lastname = trim($request->lastname);
        $student->email = trim($request->email);
        $student->phone = trim($request->phone);
        if (!empty($request->file('thumbnail'))) {
            $ext = $request->file('thumbnail')->getClientOriginalExtension();
            $file = $request->file('thumbnail');
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $ext;
            $file->move('public/upload/student/', $filename);
            $student->thumbnail = $filename;
        }
        $student->save();
        return redirect('admin/student/list')->with('success', 'student successfully Added');

    }

    protected function delete($id){
        $student = Student::getSingle($id);
        $student->delete();
        return redirect('admin/student/list')->with('success', 'deleted');

    }
}
