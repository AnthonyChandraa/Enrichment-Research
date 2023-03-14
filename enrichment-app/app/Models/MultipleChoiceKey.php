<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleChoiceKey extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'question_id';
    public $incrementing = false;

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function multipleChoiceOption(){
        return $this->belongsTo(MultipleChoiceOption::class);
    }
}
