<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Book extends Model {
    protected $fillable = array('name','author');

    //Data Validation
    public static $rules = array(
        'name'=>'required|min:2',
        'author'=>'required|min:2'
    );

    public static function validate($data) {
        return Validator::make($data,static::$rules);
    }
}