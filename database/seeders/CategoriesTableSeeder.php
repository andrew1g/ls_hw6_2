<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create(['name' => 'Action', 'description'=>'Action category','created_at'=>now(),'updated_at'=>now(),'url'=>'/?categories1']);               
        Category::create(['name' => 'RPG', 'description'=>'RPG category','created_at'=>now(),'updated_at'=>now(),'url'=>'/?categories2']);               
        Category::create(['name' => 'Квесты', 'description'=>'Квесты category','created_at'=>now(),'updated_at'=>now(),'url'=>'/?categories3']);               
        Category::create(['name' => 'Онлайн-игры', 'description'=>'Онлайн-игры category','created_at'=>now(),'updated_at'=>now(),'url'=>'/?categories4']);               
        Category::create(['name' => 'Стратегии', 'description'=>'Стратегии category','created_at'=>now(),'updated_at'=>now(),'url'=>'/?categories5']);               
        
    }
}