<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    protected $fillable = ['name'];

    public function types()
    {
        return $this
            ->belongsToMany('App\Type')
            ->withTimestamps();
    }
}
