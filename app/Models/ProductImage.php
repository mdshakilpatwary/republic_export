<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'image',
       
        
    ];

    function category(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
     }
}
