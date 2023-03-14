<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestType extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;

    public function tests(){
        return $this->hasMany(Test::class);
    }
}
