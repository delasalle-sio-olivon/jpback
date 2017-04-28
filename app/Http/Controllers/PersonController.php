<?php

namespace App\Http\Controllers;

use App\Person;
use App\Wedding;

class PersonController extends Controller
{
    public function get($id){
        return response()->json(Person::with('children', 'parents')->find($id));
    }

    public function getAll(){
        header("Access-Control-Allow-Origin: *");
        return response()->json(Person::all());
    }
}
