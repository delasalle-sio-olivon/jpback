<?php

namespace App;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class Person extends NeoEloquent {

    protected $label = 'Person';

    protected $fillable = ['name', 'firstname', 'birthdate', 'deathdate', 'birth_place', 'profession'];

    public function children()
    {
        return $this->hasMany('App\Person', 'CHILDREN');
    }
    
    public function wedding()
    {
        return $this->hasMany('App\Wedding', 'WEDDING');
    }

    public function parents()
    {
        return $this->belongsToMany('App\Person', 'CHILDREN');
    }
}