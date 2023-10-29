<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = [];

    static protected function getRecord(){
return self::select("subjects.*")->orderBy('id', 'desc')->paginate(10);
    }

    static protected function getSingle($id){
        return self::findOrFail($id);
    }

    static protected function getSubject(){
        return self::select("subjects.*")->get();
    }
}
