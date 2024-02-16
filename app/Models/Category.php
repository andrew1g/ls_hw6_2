<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'url',
        'created_at',
        'updated_at'
    ];
    

    public static function deleteCategory(int $CategoryId)
    {
        return self::destroy($CategoryId);
    }
 

   
}