<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'author', 'isbn', 'copies'
    ];

    protected function copies()
    {
        return $this->hasMany('App\Copy');
    }

    /**
     * Get the category of the book.
     */

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
