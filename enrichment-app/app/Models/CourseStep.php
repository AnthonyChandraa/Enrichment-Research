<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStep extends Model
{
    use HasFactory;

    public $keyType = 'string';
    public $incrementing = false;

    public function courseParticipants(){
        return $this->hasMany(CourseParticipant::class, 'step_id');
    }
}
