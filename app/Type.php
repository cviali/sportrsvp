<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function types()
    {
        return $this
            ->belongsToMany('App\Court');
    }
}
