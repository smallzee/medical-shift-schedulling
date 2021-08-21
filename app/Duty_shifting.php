<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duty_shifting extends Model
{
    //
    protected $table = "duty_shifting";
    protected $guarded = [];

    function shifting(){
        return $this->hasOne(ShiftingCategory::class,'id','shifting_category_id');
    }
}
