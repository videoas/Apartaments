<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['url', 'advert_id'];

    public function adverts()
    {
        return $this->belongsTo(\App\Advert::class, 'id'); //FQCN полноценное имя с нашим классом
    }
}
