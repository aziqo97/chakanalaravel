<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category() {
        return $this->hasMany(Category::class);
    }
    use HasFactory;
        protected $fillable = [
        'name',
        'price',
        'selled',
        'comment',
        'category',
        'photos',
        'created_at',
        'updated_at',
    ];
           protected $table = 'products';

}

