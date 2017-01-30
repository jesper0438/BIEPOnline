<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'startdate', 'expirydate', 'returndate'
    ];
    public function copy()
    {
        return $this->belongsTo('App\Copy');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
