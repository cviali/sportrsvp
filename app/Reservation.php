<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['court_id', 'user_id', 'date', 'duration', 'status_id'];
}
