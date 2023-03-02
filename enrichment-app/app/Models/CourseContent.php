<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    public function contentType(){
        return $this->belongsTo(ContentType::class);
    }
}
