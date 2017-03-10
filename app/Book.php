<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'author', 'isbn',
    ];

    protected function copies()
    {
        return $this->hasMany('App\Copy');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
