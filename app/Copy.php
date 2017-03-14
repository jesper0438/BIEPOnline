<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    protected $fillable = [
        'datebought', 'state'
    ];

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
