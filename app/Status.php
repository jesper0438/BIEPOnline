<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Tests\TestCase;

class Status extends Model
{
    protected $fillable = [
        'status',
    ];
}