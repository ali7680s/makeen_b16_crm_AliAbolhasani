<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>creat </title>

</head>
<body>
    <h1>افزودن </h1>
<form action="/categuris/create" method="post">
    @csrf
<input type="text" name="dastgah" placeholder="نام دسته"><br>
{{-- <input type="" name="mode" placeholder="مدل"><br>
<input type="" name="fee" placeholder="قیمت"><br>
<input type="" name="toz" placeholder="توضیحات"><br>
<input type="" name="foroshgah" placeholder="آدرس فروشگاه"><br> --}}
<input type="submit" value="send">
</form>
</body>
</html>
