<?php

namespace App\Models;

use App\Http\Traits\ModelCompositeKeyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTopic extends Model
{
    use HasFactory, ModelCompositeKeyTrait;

    protected $primaryKey = ['course_id', 'topic_id'];
    public $incrementing = false;


}
