<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $keyType = 'string';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function courseParticipants(){
        return $this->hasMany(CourseParticipant::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function studentMultipleChoiceAnswers(){
        return $this->hasMany(StudentMultipleChoiceAnswer::class);
    }

    public function studentEssayAnswer(){
        return $this->hasMany(StudentEssayAnswer::class);
    }
}
