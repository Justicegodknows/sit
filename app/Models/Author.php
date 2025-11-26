<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Productcategory;

class Author extends Model
{
    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;
    protected $fillable = ['user_id', 'first_name', 'last_name'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function productcategories()
    {
        return $this->hasMany(Productcategory::class);
    }
   
    
}
