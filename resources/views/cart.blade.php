@extends('app')

@section('content')
<p>This is my body content cart.</p>

<div class="content-head__container">            
              <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Мои заказы</div>
              </div>
              <div class="content-head__search-block">
                <div class="search-container">
                  <form class="search-container__form">
                    <input type="text" class="search-container__form__input">
                    <button class="search-container__form__btn">search</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="cart-product-list">
              <div class="cart-product-list__item">
                <div class="cart-product__item__product-photo"><img src="img/cover/game-1.jpg" class="cart-product__item__product-photo__image"></div>
                <div class="cart-product__item__product-name">
                  <div class="cart-product__item__product-name__content"><a href="#">The Witcher 3</a></div>
                </div>
                <div class="cart-product__item__cart-date">
                  <div class="cart-product__item__cart-date__content">14.12.2016</div>
                </div>
                <div class="cart-product__item__product-price"><span class="product-price__value">400 рублей</span></div>
              </div>
              <div class="cart-product-list__item">
                <div class="cart-product__item__product-photo"><img src="img/cover/game-2.jpg" class="cart-product__item__product-photo__image"></div>
                <div class="cart-product__item__product-name">
                  <div class="cart-product__item__product-name__content"><a href="#">OverWatch</a></div>
                </div>
                <div class="cart-product__item__cart-date">
                  <div class="cart-product__item__cart-date__content">14.12.2016</div>
                </div>
                <div class="cart-product__item__product-price"><span class="product-price__value">400 рублей</span></div>
              </div>
              <div class="cart-product-list__result-item">
                <div class="cart-product-list__result-item__text">Итого</div>
                <div class="cart-product-list__result-item__value">1000 рублей</div>
              </div>
            </div>
           

            @endsection('content')            