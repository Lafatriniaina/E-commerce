<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $guarded = [
        'timestamp'
    ];

//    public function create()
//    {
//        $product = new Products();
//        $product->categories = 'Category 1';
//        $product->qualities = 'Quality 1';
//        $product->contents = 'Product contents';
//        $product->prices = 10.99;
//        $product->save();
//    }
}
