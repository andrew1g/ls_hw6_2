@extends('app')

@section('content')
<p>This is my body content product1.</p>
@foreach ($product1 as $product)                                       
            <div class="content-head__container">
              <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">The Witcher 3: Wild Hunt в категории {{ $product->category->name }}.</div>              
              </div>
            </div>
            <div class="content-main__container">                        
            
              <div class="product-container">
                <div class="product-container__image-wrap"><img src="{{ $product->foto }}" class="image-wrap__image-product"></div>
                <div class="product-container__content-text">
                  <div class="product-container__content-text__title">{{ $product->name }}</div>
                  <div class="product-container__content-text__price">
                    <div class="product-container__content-text__price__value">
                      Цена: <b>{{ $product->price }}</b>
                      руб
                    </div><a href="/catalog/product/{{ $product->id }}/buy" class="btn btn-blue">Купить</a>
                  </div>
                  <div class="product-container__content-text__description">
                    <p>
                    {{ $product->description }}  
                    </p>
                    
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
      @endforeach
      @endsection    