<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Advert extends Model
{
    protected $fillable = [
       'slug','published','title_ru','title_ro','description_ru','description_ro', 'price','grade','region','sentence','housing', 'nrooms','state',
       'layout','area','floor','floors','building','waiting','kitchen','balcony','ceiling','bathroom','parking','description', 'meta_title',
       'meta_description',  'meta_keyword'
       
    ];

    public function setSlugAttribute($value)
    
    {
      $this->attributes['slug'] = Str::slug(mb_substr($this->title_ru, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
}

// Polymorphic relation with categories
public function categories()
{
    return $this->morphToMany('App\Category', 'categoryable');
}
    public function additionallies()
    {
        return $this->hasMany(\App\Additionally::class, 'advert_id');
    }
    public function pictures()
    {
        return $this->hasMany(\App\Picture::class, 'advert_id');
    }

    public function scopeLastCategories($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }




}