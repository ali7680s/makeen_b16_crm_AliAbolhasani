<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>creat user</title>

</head>
<body>

    <h1>ثبت کاربر</h1>
<form action="/users/create" method="post" class="was-validated" >
    @csrf
    <div class="mb-3 mt-3">
<input type="text" name="first_name" placeholder="نام"><br>
{{-- @if ($errors ->has('first_name'))
<li style="color: red">{{$errors->first('first_name')}}</li>
@endif --}}
<input type="text" name="last_name" placeholder="نام خانوادگی"><br>
@if ($errors ->has('last_name'))
<li style="color: red">{{$errors->first('last_name')}}</li>
@endif
<input type="" name="phone_number" placeholder="شماره موبایل"><br>
@if ($errors ->has('phone_number'))
<li style="color: red">{{$errors->first('phone_number')}}</li>
@endif
<input type="password" name="password" placeholder="پسوورد"><br>
@if ($errors ->has('password'))
<li style="color: red">{{$errors->first('password')}}</li>
@endif
<input type="submit" value="send">
</form>
</body>
</html>
