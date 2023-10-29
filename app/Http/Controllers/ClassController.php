<?php

namespace App\Http\Controllers;

use App\Models\Classes;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    //
    protected function list()
    {
        $data['getRecord'] = Classes::getRecord();
        return view('admin.class.list', $data);
    }

    protected function add()
    {
        return view('admin.class.add');
    }

    protected function insert(Request $request)
    {
        $request->validate([
            'classname' => 'required|unique:classes,class_name',
            'status' => 'required',
        ]);
        $class = new Classes();
        $class->class_name = trim($request->classname);
        $class->status = trim($request->status);
        $class->save();
        return redirect('admin/class/list')->with('success', 'Class Successfully Created');
    }

    protected function edit($id)
    {
        $data['getSingle'] = Classes::getSingle($id);
        if (!empty($data['getSingle'])) {
            return view('admin.class.edit', $data);
        } else {
            abort(404);
        }
    }

    protected function update($id, Request $request)
    {
        $class = Classes::getSingle($id);
        $class->class_name = trim($request->classname);
        $class->status = trim($request->status);
        $class->save();
        return redirect('admin/class/list')->with('success', 'Class Successfully Updated');
    }



    protected function delete($id)
    {
        $class = Classes::getSingle($id);
        $class->delete();
        return redirect('admin/class/list')->with('success', 'Class Successfully Deleted');
    }
}
