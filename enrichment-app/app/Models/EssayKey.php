<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EssayKey extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'question_id';

    public function question(){
        return $this->belongsTo(Question::class);
    }
}
