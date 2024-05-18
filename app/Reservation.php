<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['court_id', 'user_id', 'reservation_date', 'duration', 'status_id'];

    public function users()
    {
        return $this
            ->belongsToMany('App\User')
            ->withTimestamps();
    }

    public function courts()
    {
        return $this
            ->belongsToMany('App\Court')
            ->withTimestamps();
    }
}
