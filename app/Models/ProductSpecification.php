<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'title',
        'textContent',
       
        
    ];

    function category(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
     }


}
