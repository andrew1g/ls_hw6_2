@extends('app')

@section('content')
<p>This is my admin category add content.</p>
<h1>Создание новой категории</h1>
    <form method="post" action="{{ route('admin.categorysave') }}" enctype="multipart/form-data">
          
@csrf
<div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Наименование"
           required maxlength="255" value="">
</div>
<br>
<div class="form-group">
    <input type="text" margin="5" class="form-control" name="description" placeholder="Описание"
           required maxlength="2000" value="">
</div>
<br>
<div class="form-group">
    <input type="text" class="form-control" name="url" placeholder="Ссылка"
        required maxlength="255" value="">
</div>
<br>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>

</form>

@endsection  