<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    static public function getRecord(){
        return self::select('students.*')->orderBy('id', 'desc')->paginate(4);
    }

    static protected function getSingle($id){
        return self::findOrFail($id);
    }

}
