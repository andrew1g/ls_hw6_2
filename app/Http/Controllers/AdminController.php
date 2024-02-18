<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Auth\User;
use App\Models\Category;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function categories()
    {
        return view('admin.categories.categories', ['categories' => Category::query()->orderBy('id','desc')->paginate(6)]);
    }

    public function products()
    {
        return view('admin.products.products',['products' => Product::query()->orderBy('id','desc')->paginate(6)]);
    } 

    public function productadd()
    {
        return view('admin.products.productadd');
    } 

    public function productshow(Request $request)
    {
        $data = $request->all();
                
        $id=$data["product_id"];
        $product = Product::find($id);              
       
        
        return view('admin.products.productshow',['product' => $product]);    

    } 

    public function productsave(Request $request)
    {         
            $data = $request->all();
       
            $data["updated_at"]=now();     
            if (!isset($data["id"])) {  
              
                $data["created_at"]=now();  
                $product = Product::create($data);       
            } 
            else {
                Product::find($data["id"])->update($data);
                $product = Product::find($data["id"]);
                              
            };      
       
            return view('admin.products.productshow',['product' => $product]);    
       
    } 

    public function productdelete(Request $request)
    {         
        $data = $request->all();
        $id =$data["product_id"];
        
        Product::destroy($id);
        return redirect()->route('admin.products.products',['products' => Product::query()->orderBy('id','desc')->paginate(6)]); 
        // return view('admin.products',['products' => Product::query()->orderBy('id','desc')->paginate(6)]);
    }

    public function admin()
    {       
        
        return view('admin.admin');
    }


    public function categoryadd()
    {
        return view('admin.categories.categoryadd');
    } 

    public function categoryshow(Request $request)
    {
        $data = $request->all();
                
        $id=$data["category_id"];
        $category = Category::find($id);              
       
        
        return view('admin.categories.categoryshow',['category' => $category]);    

    } 

    public function categorysave(Request $request)
    {         
            $data = $request->all();
       
            $data["updated_at"]=now();     
            if (!isset($data["id"])) {  
              
                $data["created_at"]=now();  
                $category = Category::create($data);       
            } 
            else {
                Category::find($data["id"])->update($data);
                $category = Category::find($data["id"]);
                              
            };      
       
            return view('admin.categories.categoryshow',['category' => $category]);    
       
    } 

    public function categorydelete(Request $request)
    {         
        $data = $request->all();
        $id =$data["category_id"];
        
        Product::destroy($id);
        return redirect()->route('admin.categories.categories',['categories' => Category::query()->orderBy('id','desc')->paginate(6)]); 
        // return view('admin.products',['products' => Product::query()->orderBy('id','desc')->paginate(6)]);
    }


}
