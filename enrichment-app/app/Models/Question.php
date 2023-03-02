<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $keyType = 'string';

    public function multipleChoiceOption(){
        return $this->hasMany(MultipleChoiceOption::class);
    }

    public function answerType(){
        return $this->belongsTo(AnswerType::class);
    }

    public function essayKey(){
        return $this->hasOne(EssayKey::class);
    }

    public function multipleChoiceKeys(){
        return $this->hasMany(MultipleChoiceKey::class);
    }

    public function studentEssayAnswers(){
        return $this->hasMany(StudentEssayAnswer::class);
    }

    public function studentMultipleChoiceAnswers(){
        return $this->hasMany(StudentMultipleChoiceAnswer::class);
    }

    public function test(){
        return $this->belongsTo(Test::class);
    }
}
