<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignSubject extends Model
{
    use HasFactory;
    protected $guarded = [];

    static protected function getRecord(){
        return self::select('assign_subjects.*')->orderBy('id', 'desc')->paginate(5);
    }

    static protected function getSingle($id){
        // return self::select('assign_subjects.*')->get();
        return self::findOrFail($id);
    }
}
