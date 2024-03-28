<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> edit</title>
</head>
<body>
    <div class="form-group row">
    <h1>ویرایش </h1>
    <form action="/categuris/edit/{{$cate->id}}" method="post">
    @csrf
<input type="text" name="dastgah"value="{{$cate->dastgah}}"><br>
{{-- <input type="text" name="mode"value="{{$cate->mode}}"><br>
<input type="" name="fee"value="{{$cate->fee}}"><br>
<input type="" name="toz"value="{{$cate->toz}}"><br>
<input type="" name="foroshgah"value="{{$cate->foroshgah}}"><br> --}}
<input type="submit" value="send">
</div>
</form>
</body>
</html>
