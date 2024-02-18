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
<p>This is my admin products content.</p>
<h1>Все товары</h1>
    <a href="{{ route('admin.productadd') }}" class="btn btn-success mb-4">
        Создать товар
    </a>
    <table class="table" border="1">
        <tr>
            <th width="5%">id</th>
            <th width="20%">Наименование</th>
            <th width="30%">Описание</th>  
            <th width="5%">Удалить</th>  
            <th width="5%">Редактировать</th>  


        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description}}</td>            
            <td>
                <form action="{{ route('admin.productdelete', ['product_id' => $product->id]) }}"
                      method="post" onsubmit="return confirm('Удалить этот товар?')">
                    @csrf                   
                    <button type="submit">Удалить</button>
                </form>
            </td>
            <td>
                <form action="{{ route('admin.productshow', ['product_id' => $product->id]) }}"
                      method="post" onsubmit="return confirm('Редактировать этот товар?')">
                    @csrf              
                    <button type="submit">Редактировать</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>




 


                 
   
<div class="content-footer__container">
                {{ $products->links() }}              
            </div>
@endsection  