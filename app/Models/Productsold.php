<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productsold extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsoldFactory> */
    use HasFactory;
    protected $fillable = ['product_id', 'customer_id', 'author_id', 'quantity', 'total_price'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
