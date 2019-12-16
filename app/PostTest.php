<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTest extends Model
{
    protected $fillable = [
        'id',
        'title',
        'content'
    ];
    public function modelTest(){
        return $this->morphOne(ModelTest::class,'model');
    }
}
