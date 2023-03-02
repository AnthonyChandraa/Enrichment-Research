<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function lecturers(){
        return $this->hasMany(Lecturer::class);
    }
}
