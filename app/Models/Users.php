<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use HasFactory;

    public function admin()
    {
        return $this->belongsTo(Admins::class);
    }

    public function products()
    {
        return $this->hasMany(Products::class);
    }

    protected $fillable = [
        'name',
        'email',
        'firstname',
        'phone',
        'city',
        'password'
    ];

    protected $guarded = [
        'timestamp'
    ];
}
