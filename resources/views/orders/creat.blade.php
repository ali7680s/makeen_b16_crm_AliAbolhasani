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
<input type="text" name="first" placeholder="name"><br>
<input type="date" name="tarikh" placeholder="tarikh"><br>
<input type="" name="code_sefaresh" placeholder="code_sefaresh"><br>
<input type="" name="code_posti" placeholder="code_posti"><br>
<input type="" name="address" placeholder="address"><br>
<input type="submit" value="send">
</form>
</body>
</html>
