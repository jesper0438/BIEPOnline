<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Copy extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
