<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;
    protected $fillable = ['title', 'content', 'user_id', 'productsolds_id', 'productcategories_id'];
        
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function product()
    {
        return $this->belongsTo(Productsold::class, 'productsolds_id');
    }
    public function productcategory()
    {
        return $this->belongsTo(Productcategory::class, 'productcategories_id');
    }
}
