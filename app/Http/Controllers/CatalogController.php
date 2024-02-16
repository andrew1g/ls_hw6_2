<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Auth\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class CatalogController extends Controller
{
    //    
    public function index()    
    /*Возвращает все товары*/
    {        

        return view('index', ['products' => Product::query()->orderBy('id','desc')->paginate(6)]);
    }




    public function category($category) {        
        /*Возвращает все товары с определенной категориеи $category*/
        $products = Product::query()->where('category_id', $category)->orderBy('id','desc')->paginate(6);
        return view('index', ['products' => $products]);
    }

    public function categoryName($id) {        
        /*Возвращает все товары с определенной категориеи $category*/
        $name = Category::where('id', $id)->get()->first()->name;
        return $name;
    }

    
    

    public function product($id) {        
        /*Возвращает товар с определенным $id, категорию берем из таблицы categories*/
        $product1 = Product::where('id', $id)->get();
        return view('product1', ['product1' => $product1]);
    }



    public function buyproduct($product_id) {                
        $product = Product::where('id', $product_id)->get();
        $username = Auth::user()->name;
        $email = Auth::user()->email;       
        return view('buy_product1', ['buy_product1' => $product, 'username' => $username, 'email' => $email]);
    }




}
