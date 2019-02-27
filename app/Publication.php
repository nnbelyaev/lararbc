<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class Publication extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['prefix','heading','lead','imagealt','text','title', 'title_extra','keywords','description'];
    protected $fillable = ['type','office','status','dtpub','dtend','rubric_id','region_id','story_id','ukrnet_id','bold',
                           'color','exclusive','has_photo','has_video','maindomain','webpush','webpush_sended','image',
                           'extra','tags','readalso','authors','editor_id','corrector_id','locked'];

    public static function boot() {
        parent::boot();

        static::creating(function ($publication) {
            $publication->slug = Str::slug($publication->heading).'-'.time().'.html';
        });
        static::created(function ($publication) {
            Cache::tags('publications')->flush();
        });
        static::updated(function ($publication) {
            Cache::tags('publications')->flush();
        });
        static::deleted(function ($publication) {
            Cache::tags('publications')->flush();
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
