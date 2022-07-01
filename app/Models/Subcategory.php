<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;


    public function products()
    {
        return $this->belongsToMany(
             Product::class,
            'product_subcategory',
            'subcategory_id',
            'product_id',
            'id',
            'id',
        );
    }
}
