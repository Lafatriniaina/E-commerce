<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $softDelete = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $guarded = [
        'timestamp'
    ];

}
