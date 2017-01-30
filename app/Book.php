<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'isbn', 'copies'
    ];

    protected function copies()
    {
        return $this->hasMany('App\Copy');
    }

    /**
     * Get the author of the book.
     */

    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
