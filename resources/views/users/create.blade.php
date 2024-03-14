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
<form action="/users/create" method="post">
    @csrf
<input type="text" name="first_name" placeholder="name"><br>
<input type="text" name="last_name" placeholder="last_name"><br>
<input type="" name="phone_number" placeholder="phone_number"><br>
<input type="password" name="password" placeholder="password"><br>
<input type="submit" value="send">
</form>
</body>
</html>
