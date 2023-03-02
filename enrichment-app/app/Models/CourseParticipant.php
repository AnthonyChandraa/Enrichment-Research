<?php

namespace App\Models;

use App\Http\Traits\ModelCompositeKeyTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseParticipant extends Model
{
    use HasFactory, ModelCompositeKeyTrait;

    protected $primaryKey = ['course_id', 'student_id'];
    public $incrementing = false;


}
