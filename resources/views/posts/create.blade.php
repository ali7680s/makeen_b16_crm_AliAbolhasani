<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>creat </title>

</head>
<body>
    <h1>ثبت جدید </h1>
<form action="/posts/create" method="post">
    @csrf
<input type="text" name="onvan" placeholder="عنوان"><br>
<input type="" name="mozoe" placeholder="موضوع"><br>
<input type="" name="tolid" placeholder="تولید"><br>
<input type="" name="forosh" placeholder="فروش در سال"><br>
<input type="submit" value="send">
</form>
</body>
</html>
