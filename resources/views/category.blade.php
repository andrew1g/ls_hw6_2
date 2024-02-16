@extends('app')

@section('content')
<p>This is my body content category.</p>




            <div class="content-head__container">
              <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Игры в разделе action</div>
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
            <div class="content-main__container">
              <div class="products-category__list">
                <div class="products-category__list__item">
                  <div class="products-category__list__item__title-product"><a href="#">Batman - Telltale Game Series</a></div>
                  <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link"><img src="img/cover/game-6.jpg" alt="Preview-image"></a></div>
                  <div class="products-category__list__item__description"><span class="products-price">400 руб.</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
                <div class="products-category__list__item">
                  <div class="products-category__list__item__title-product"><a href="#">Deus Ex: Mankind Divided</a></div>
                  <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link"><img src="img/cover/game-3.jpg" alt="Preview-image"></a></div>
                  <div class="products-category__list__item__description"><span class="products-price">400 руб.</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
                <div class="products-category__list__item">
                  <div class="products-category__list__item__title-product"><a href="#">The Witcher 3: Wild Hunt</a></div>
                  <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link"><img src="img/cover/game-1.jpg" alt="Preview-image"></a></div>
                  <div class="products-category__list__item__description"><span class="products-price">400 руб.</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
                <div class="products-category__list__item">
                  <div class="products-category__list__item__title-product"><a href="#">Rocket League</a></div>
                  <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link"><img src="img/cover/game-7.jpg" alt="Preview-image"></a></div>
                  <div class="products-category__list__item__description"><span class="products-price">400 руб.</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
                <div class="products-category__list__item">
                  <div class="products-category__list__item__title-product"><a href="#">Dishonored 2</a></div>
                  <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link"><img src="img/cover/game-8.jpg" alt="Preview-image"></a></div>
                  <div class="products-category__list__item__description"><span class="products-price">400 руб.</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
                <div class="products-category__list__item">
                  <div class="products-category__list__item__title-product"><a href="#">This War of Mine</a></div>
                  <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link"><img src="img/cover/game-9.jpg" alt="Preview-image"></a></div>
                  <div class="products-category__list__item__description"><span class="products-price">400 руб.</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
              </div>
            </div>
           

            @endsection('content')