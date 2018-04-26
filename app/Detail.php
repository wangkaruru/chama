<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'phonenumber','receipt','datedeposited','depositamount',
    ];
protected $table="details";
}
