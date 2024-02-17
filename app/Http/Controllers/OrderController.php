<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
use App\Mail\SampleEmail;


class OrderController extends Controller
{
    //    
    public function index()
    {        
        return view('index', ['products' => Product::all()]);
    }

  

    public function orderproduct(Request $request) {        
                  
        /* Пишем в БД в таюлицу orders новыезаказы */         
         $this->validate($request, [
            'product_id' => 'required',
            'email' => 'required|email|max:255',
            'user_name' => 'required|max:255',            
        ]);

        $admin_email = 'andrew289mail@gmail.com';

        $order = Order::create([
            'name'=>$request->user_name,
            'email'=>$request->email,
            'products_id'=>$request->product_id,
            'created_at'=>now(),
            'updated_at'=>now()
            ]);

         Mail::to($admin_email)->send(new OrderShipped($order));
          
            
        return view('ordersuccess',['order'=>$order]);

    }
    }



