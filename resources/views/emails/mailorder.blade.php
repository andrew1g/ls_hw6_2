<!DOCTYPE html>
<html>
<head>
    <title>Новый заказ {{ $order->id }}. </title>
</head>
<body>
<p>Новый заказ. </p>           
<p>Номер заказа: {{ $order->id }}</p>    
<p>Имя: {{ $order->name }}</p>    
<p>email: {{ $order->email }}</p>    
<p>Дата заказа: {{ $order->created_at }}</p>            
        
</body>
</html>      
                               
          