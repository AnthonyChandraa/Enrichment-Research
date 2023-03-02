<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $keyType = 'string';

    public function testType(){
        return $this->belongsTo(TestType::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
