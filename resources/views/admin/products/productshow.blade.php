@extends('app')

@section('content')
<p>This is my admin product edit/show content.</p>
<form method="get" action="{{ route('admin.products') }}" enctype="multipart/form-data">
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Перейти в список товаров для админа</button>
          </div>
          
          </form>

<h1>Редактирование существующего товара с id = {{ $product->id }}</h1>
    <form method="post" action="{{ route('admin.productsave') }}" enctype="multipart/form-data">
          
@csrf
<div class="form-group">
    <input type="hidden" hidden class="form-control" name="id" placeholder="id"
           value="{{ $product->id }}">
</div>
<br>
<div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Наименование"
           required maxlength="255" value="{{ $product->name }}">
</div>
<br>
<div class="form-group">
    <input type="text" margin="5" class="form-control" name="description" placeholder="Описание"
           required maxlength="2000" value="{{ $product->description }}">
</div>
<br>
<div class="form-group">
    <input type="text" class="form-control" name="price" placeholder="Цена"
           required value="{{ $product->price }}">
</div>
<br>
<div class="form-group">
    <input type="text" class="form-control" name="url" placeholder="Ссылка"
        required maxlength="255" value="{{ $product->url }}">
</div>
<br>
<div class="form-group">
    <input type="text" class="form-control" name="category_id" placeholder="id Категории"
        required value="{{ $product->category_id }}">
</div>
<br>
<div class="form-group">
    <input type="text" class="form-control" name="foto" placeholder="Ссылка на картинку"
        required maxlength="255" value="{{ $product->foto }}">
</div>
<br>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>

</form>

@endsection  