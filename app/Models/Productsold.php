<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productsold extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsoldFactory> */
    use HasFactory;
    protected $fillable = ['name', 'price', 'sold_at', 'customer_id', 'author_id', 'productcategories_id'];
    
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
    
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    
    public function productcategory()
    {
        return $this->belongsTo(Productcategory::class, 'productcategories_id');
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class, 'productsolds_id');
    }
}
