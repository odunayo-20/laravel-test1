<?php

namespace App\Http\Controllers;
use App\Models\AssignSubject;
use App\Models\Classes;
use App\Models\Subject;
use Illuminate\Http\Request;

class AssignSubjectController extends Controller
{
    protected function list(){
        $data['getRecord'] = AssignSubject::getRecord();
        return view('admin.assign_subject.list', $data);
    }

    protected function add(){
        $data['getSubject'] = Subject::getSubject();
        $data['getClass'] = Classes::getClass();
        return view('admin.assign_subject.add', $data);

    }

    protected function insert(Request $request){
        $assign_subject = new AssignSubject();
        $assign_subject->subject = trim($request->subject);
        $assign_subject->class = trim($request->class);
        $assign_subject->status = trim($request->status);
        $assign_subject->save();
        return redirect('admin/assign_subject/list')->with('success', 'Assign subject Successfully Created');
    }

    protected function edit($id){
        $data['getSubject'] = Subject::getSubject();
        $data['getClass'] = Classes::getClass();
        $data['getSingle'] = AssignSubject::getSingle($id);
        if(!empty($data['getSingle'])){
return view('admin.assign_subject.edit', $data);
        }else{
            abort(404);
        }
    }


    protected function update($id, Request $request){
        $assign_subject = AssignSubject::getSingle($id);
        $assign_subject->subject = trim($request->subject);
        $assign_subject->class = trim($request->class);
        $assign_subject->status = trim($request->status);
        $assign_subject->save();
        return redirect('admin/assign_subject/list')->with('success', 'Assign subject Successfully Updated');
    }
}
