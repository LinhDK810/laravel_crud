<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTest extends Model{
    protected $fillable = [
        'name'
];
    public function modelTest(){
        return $this->morphOne(ModelTest::class, 'model');

    }
}
