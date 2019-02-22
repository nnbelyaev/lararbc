<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Rubric extends Model
{
    protected $guarded = [];

    public static function boot() {
        parent::boot();

        static::creating(function ($rubric) {
            $rubric->translit = Str::slug($rubric->name_rus);
        });
    }


}
