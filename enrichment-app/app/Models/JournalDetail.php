<?php

namespace App\Models;

use App\Http\Traits\ModelCompositeKeyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalDetail extends Model
{
    use HasFactory, ModelCompositeKeyTrait;

    protected $primaryKey = ['journal_id', 'lecturer_id'];
    public $incrementing = false;

    public function journal(){
        return $this->belongsTo(Journal::class);
    }

    public function lecturer(){
        return $this->belongsTo(Lecturer::class);
    }
}
