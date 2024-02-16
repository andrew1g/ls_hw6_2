<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create(['name' => 'The Witcher 3: Wild Hunt', 
            'description'=>'The Witcher 3: Wild Hunt DESCRITION',
            'category_id'=>1,
            'price'=>400,
            'foto'=>'img/cover/game-1.jpg',
            'created_at'=>now(),
            'updated_at'=>now(),
            'url'=>'/?product1',
        ]);         
        
        Product::create(['name' => 'Overwatch', 
            'description'=>'Overwatch DESCRITION',
            'category_id'=>2,
            'price'=>300,
            'foto'=>'img/cover/game-2.jpg',
            'created_at'=>now(),
            'updated_at'=>now(),
            'url'=>'/?product2',
        ]);     
        
        Product::create(['name' => 'Deus Ex: Mankind Divided', 
        'description'=>'Deus Ex: Mankind Divided DESCRITION',
        'category_id'=>3,
        'price'=>500,
        'foto'=>'img/cover/game-3.jpg',
        'created_at'=>now(),
        'updated_at'=>now(),
        'url'=>'/?product3',
    ]);  
                                                
    }
}