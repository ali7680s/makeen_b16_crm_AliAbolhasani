<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>edit order</title>
</head>
<body>
    <div class="form-group row">
    <h1>ویرایش سفارش</h1>
<form action="/orders/edit/{{$order->id}}" method="post">
    @csrf
<input type="text" name="first"value="{{$order->first}}"><br>
<input type="text" name="tarikh"value="{{$order->tarikh}}"><br>
<input type="" name="code_sefaresh"value="{{$order->code_sefaresh}}"><br>
<input type="" name="code_posti"value="{{$order->code_posti}}"><br>
<input type="" name="address"value="{{$order->address}}"><br>
<input type="submit" value="send">
</div>
</form>
</body>
</html>
