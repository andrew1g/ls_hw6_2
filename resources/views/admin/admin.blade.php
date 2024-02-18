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
@endsection  