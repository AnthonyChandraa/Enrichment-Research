<?php

namespace App\Models;

use App\Http\Traits\ModelCompositeKeyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMultipleChoiceAnswer extends Model
{
    use HasFactory, ModelCompositeKeyTrait;
    protected $primaryKey = ['question_id', 'student_id'];
    public $incrementing = false;

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function multipleChoiceOption(){
        return $this->belongsTo(MultipleChoiceOption::class);
    }
}
