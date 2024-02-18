@extends('app')

@section('content')
<p>This is my admin product edit/show content.</p>
<form method="get" action="{{ route('admin.categories') }}" enctype="multipart/form-data">
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Перейти в список категорий для админа</button>
          </div>
          
          </form>

<h1>Редактирование существующей категории с id = {{ $category->id }}</h1>
    <form method="post" action="{{ route('admin.categorysave') }}" enctype="multipart/form-data">
          
@csrf
<div class="form-group">
    <input type="hidden" hidden class="form-control" name="id" placeholder="id"
           value="{{ $category->id }}">
</div>
<br>
<div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Наименование"
           required maxlength="255" value="{{ $category->name }}">
</div>
<br>
<div class="form-group">
    <input type="text" margin="5" class="form-control" name="description" placeholder="Описание"
           required maxlength="2000" value="{{ $category->description }}">
</div>
<br>
<div class="form-group">
    <input type="text" class="form-control" name="url" placeholder="Ссылка"
        required maxlength="255" value="{{ $category->url }}">
</div>
<br>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>

</form>

@endsection  