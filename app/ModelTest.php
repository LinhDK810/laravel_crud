<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTest extends Model
{
    protected $fillable = [
        'url',
        'model_type',
        'model_id'
];
    public function model(){
        return $this->morphTo();
    }
}
