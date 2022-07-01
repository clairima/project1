<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    
    public $primaryKey = 'id';

    
    


    public function categories()
    {
        return $this->belongsToMany(
            Category::class,
           'category_product',
           'category_id',
           'product_id',
           'id',
           'id',
        );
    }


    public function subcategories()
    {
        return $this->belongsToMany(
            Subategory::class,
           'product_subcategory',
           'subcategory_id',
           'product_id',
           'id',
           'id',
        );
    }
}
