@extends('app')

@section('content')
<p>This is my body content buy product.</p>        
            <div class="content-main__container">                        
            @foreach ($buy_product1 as $product)                                                                
            <div class="content-main__container__product">             
              <div class="product-container">
                <form method="POST" action="{{ route('catalog.orderproduct') }}">
                      @csrf
                      <div class="product-container__content-text__title">{{ $product->name }}</div>
                      <div class="product-container__image-wrap"><img src="{{ $product->foto }}" class="image-wrap__image-product"></div>
                      <div class="product-container__content-text__price__value">Цена: <b>{{ $product->price }}</b> руб</div>
                      <div><input type="text" name="product_id" value="{{ $product->id }}"></div>
                      <div><input type="text" name="user_name" value="{{ $username }}"></div>
                      <div><input type="text" name="email" value="{{ $email }}"></div>
                      <div><button type="submit">Купить</button></div>
                </form>                                                                                                          
                </div>
              </div>
              @endforeach
            </div>
          
@endsection    