<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'created_at',
        'updated_at',
        'foto',
        'description'
    ];

        
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }    
   
}