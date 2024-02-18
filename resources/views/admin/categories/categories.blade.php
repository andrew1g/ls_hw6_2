@extends('app')

@section('content')
<p>ADMIN PANEL.</p>
<h1>РАЗДЕЛЫ АДМИН ПАНЕЛИ</h1>
    <a href="{{ route('admin.products') }}" class="btn btn-success mb-4">
        ТОВАРЫ
    </a>
<br>
<br>
<a href="{{ route('admin.categories') }}" class="btn btn-success mb-4">
        КАТЕГОРИИ
    </a>
    <br>
<p>This is my admin categories content.</p>
<h1>Все категории</h1>
    <a href="{{ route('admin.categoryadd') }}" class="btn btn-success mb-4">
        Создать категорию
    </a>
    <table class="table" border="1">
        <tr>
            <th width="5%">id</th>
            <th width="20%">Наименование</th>
            <th width="30%">Описание</th>  
            <th width="5%">Удалить</th>  
            <th width="5%">Редактировать</th>  


        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description}}</td>            
            <td>
                <form action="{{ route('admin.categorydelete', ['category_id' => $category->id]) }}"
                      method="post" onsubmit="return confirm('Удалить эту категорию?')">
                    @csrf                   
                    <button type="submit">Удалить</button>
                </form>
            </td>
            <td>
                <form action="{{ route('admin.categoryshow', ['category_id' => $category->id]) }}"
                      method="post" onsubmit="return confirm('Редактировать эту категорию?')">
                    @csrf              
                    <button type="submit">Редактировать</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>




 


                 
   
<div class="content-footer__container">
                {{ $categories->links() }}              
            </div>
@endsection            