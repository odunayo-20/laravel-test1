<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Models\SubjectModel;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

protected function list(){
    $data['getRecord'] = Subject::getRecord();
    return view('admin.subject.list', $data);
}

protected function add(){
    return view('admin.subject.add');
}

protected function insert(Request $request){
    $request->validate([
        "subject_name" => "required",
        "subject_type" => "required",
        "status" => "required",
    ]);

    $subject = new Subject();
    $subject->subject_name = trim($request->subject_name);
    $subject->subject_type = trim($request->subject_type);
    $subject->status = trim($request->status);
    $subject->save();
    return redirect('admin/subject/list')->with('success', 'Subject Successfully Created');
}

protected function edit($id){
    $data['getSingle'] = Subject::getSingle($id);
    return view('admin.subject.edit', $data);
}

protected function update($id, Request $request){
    $request->validate([
        "subject_name" => "required|unique:subjects,subject_name",
    ]);

    $subject = Subject::getSingle($id);
    $subject->subject_name = trim($request->subject_name);
    $subject->subject_type = trim($request->subject_type);
    $subject->status = trim($request->status);
    $subject->save();
    return redirect('admin/subject/list')->with('success', 'Subject Successfully Updated');

}
}
