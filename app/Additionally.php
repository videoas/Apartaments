<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additionally extends Model
{
  protected $fillable = ['name', 'advert_id'];

     public function adverts()
      {
        return $this->belongsTo(\App\Advert::class, 'id'); //FQCN полноценное имя с нашим классом
      }

}
