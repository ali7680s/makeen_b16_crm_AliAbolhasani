<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>creat order</title>

</head>
<body>
    <h1>ثبت سفارش</h1>
<form action="/orders/create" method="post">
    @csrf
<input type="text" name="first" placeholder="نام ونام خانوادگی"><br>
@if ($errors ->has('first'))
<li style="color: red">{{$errors->first('first')}}</li>
@endif
<input type="date" name="tarikh" placeholder="تاریخ"><br>
@if ($errors ->has('tarikh'))
<li style="color: red">{{$errors->first('tarikh')}}</li>
@endif
<input type="" name="code_sefaresh" placeholder="کد سفارش"><br>
@if ($errors ->has('code_sefaresh'))
<li style="color: red">{{$errors->first('code_sefaresh')}}</li>
@endif
<input type="" name="code_posti" placeholder="کد پستی"><br>
@if ($errors ->has('code_posti'))
<li style="color: red">{{$errors->first('code_posti')}}</li>
@endif
<input type="" name="address" placeholder="آدرس"><br>
@if ($errors ->has('address'))
<li style="color: red">{{$errors->first('address')}}</li>
@endif
<input type="submit" value="send">
</form>
</body>
</html>
