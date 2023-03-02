<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    public function courseParticipant(){
        return $this->hasOne(CourseParticipant::class);
    }

    public function lecturer(){
        return $this->belongsTo(Lecturer::class);
    }

    public function courseTopics(){
        return $this->hasMany(CourseTopic::class);
    }

    public function courseContents(){
        return $this->hasMany(CourseContent::class);
    }
    public function tests(){
        return $this->hasMany(Test::class);
    }
}
