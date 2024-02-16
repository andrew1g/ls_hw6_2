<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'products_id',
        'created_at',
        'updated_at',
        
    ];            
}