<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $directory = '/images/';
    protected $fillable = ['title', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos()
    {
        return $this->morphMany(Photo::class, 'imageable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtoupper($value);
    }

    public function getPathAttribute($value)
    {
        return $this->directory . $value;
    }
}
