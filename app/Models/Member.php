<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['profile_img', 'name', 'email', 'role', 'address', 'created_at', 'updated_at'];
    use HasFactory;
}