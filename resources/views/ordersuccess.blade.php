@extends('app')
@section('content')            
           <p>Вы успешно создали заказ. </p>                    
           <p>Ваш номер заказа: {{ $order->id }}</p>
@endsection    