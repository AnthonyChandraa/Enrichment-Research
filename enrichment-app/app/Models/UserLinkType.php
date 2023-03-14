<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLinkType extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    public function userLinks(){
        return $this->hasMany(UserLink::class);
    }
}
