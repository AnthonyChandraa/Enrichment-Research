<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;

    public function journalDetails(){
        return $this->hasMany(JournalDetail::class);
    }
}
