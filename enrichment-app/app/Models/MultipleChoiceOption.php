<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleChoiceOption extends Model
{
    use HasFactory;
    protected $keyType = 'string';

    public function multipleChoiceKey(){
        return $this->hasMany(MultipleChoiceKey::class, 'choice_id');
    }

    public function studentMultipleChoiceAnswer(){
        return $this->hasMany(StudentMultipleChoiceAnswer::class, 'choice_id');
    }
}

