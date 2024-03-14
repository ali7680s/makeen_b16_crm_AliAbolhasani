<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>edit user</title>
</head>
<body>
    <div class="form-group row">
    <h1>ویرایش کاربر</h1>
<form action="/users/edit/{{$user->id}}" method="post">
    @csrf
<input type="text" name="first_name"value="{{$user->first_name}}"><br>
<input type="text" name="last_name"value="{{$user->last_name}}"><br>
<input type="" name="phone_number"value="{{$user->phone_number}}"><br>
<input type="password" name="password"value="{{$user->password}}"><br>
<input type="submit" value="send">
</div>
</form>
</body>
</html>
