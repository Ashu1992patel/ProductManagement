<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image', 'title', 'price', 'category_id', 'description', 'rating', 'stock', 'likes'
    ];

    protected $dates = ['deleted_at'];

    #   Binding relationship with product for everytime
    protected $with = ['category'];

    #   One to one inverse relationship between product & category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    #   Getter magic method
    public function getCustomDescriptionAttribute()
    {
        return \Illuminate\Support\Str::words($this->description, 5);
    }
}
