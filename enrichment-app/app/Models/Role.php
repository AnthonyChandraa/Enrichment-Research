<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;

    public function userRoles(){
        return $this->hasMany(UserRole::class);
    }
}
