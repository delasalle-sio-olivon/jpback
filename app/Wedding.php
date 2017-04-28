<?php

namespace App;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class Wedding extends NeoEloquent {

    protected $label = 'Wedding';

    protected $fillable = ['start', 'end'];

    public function parents()
    {
        return $this->belongsToMany('App\Person', 'WEDDING');
    }

}