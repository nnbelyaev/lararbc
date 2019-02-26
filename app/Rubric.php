<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Rubric extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name','h1','title','keywords','description'];
    protected $fillable = ['status','category','google_news','banner_zone','subdomain','order'];

    public static function boot() {
        parent::boot();

        static::creating(function ($rubric) {
            $rubric->translit = Str::slug($rubric->name);
        });
    }

    public function getRouteKeyName()
    {
        return 'translit';
    }
}
