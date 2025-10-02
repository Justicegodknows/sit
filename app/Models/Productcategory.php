<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productcategory extends Model
{
    /** @use HasFactory<\Database\Factories\ProductcategoryFactory> */
    use HasFactory;
    protected $fillable = ['name', 'description', 'author_id'];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
