<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'isbn',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    protected function copies()
    {
        return $this->hasMany('App\Copy');
    }
}
