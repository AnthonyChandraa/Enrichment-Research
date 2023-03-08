<?php

namespace App\Models;

use App\Http\Traits\ModelCompositeKeyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLink extends Model
{
    use HasFactory, ModelCompositeKeyTrait;

    protected $primaryKey = ['user_id', 'url'];
    public $incrementing = false;
    public function user(){
        return $this->belongsTo(User::class);
    }
}
