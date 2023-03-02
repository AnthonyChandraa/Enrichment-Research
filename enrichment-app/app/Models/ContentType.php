<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    public function CourseContents(){
        return $this->hasMany(CourseContent::class);
    }
}
