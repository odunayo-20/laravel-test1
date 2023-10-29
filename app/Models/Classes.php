<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $guarded = [];

    static function getRecord(){
        return self::select('classes.*')->orderBy('id', 'desc')->paginate(10);
    }

    static function getSingle($id){
        return self::findOrFail($id);
    }

    static protected function getClass(){
        return self::select("classes.*")->where('status', '=', 'Active')->get();
    }

}
