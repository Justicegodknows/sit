<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'email'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function productcategories()
    {
        return $this->hasMany(Productcategory::class);
    }
    public function productsolds()
    {
        return $this->hasMany(Productsold::class);
    }
    
}
