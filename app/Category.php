<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    // Mass assigned
    protected $fillable = ['title_ru', 'title_ro', 'slug', 'parent_id', 'published', 'user_id', 'modified_by'];

    //Mutators
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    // Get children category
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    
    public function advert()
    {
        return $this->morphedByMany('App\Advert', 'categoryable');
    }
    
    public function scopeLastCategories($query, $count)
    {
            return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
    // Polymorphic relation with articles

 
}