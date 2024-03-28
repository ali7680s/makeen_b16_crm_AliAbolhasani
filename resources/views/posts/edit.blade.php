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
    <form action="/posts/edit/{{$post->id}}" method="post">
    @csrf
<input type="text" name="onvan"value="{{$post->onvan}}"><br>
{{-- <input type="text" name="mozoe"value="{{$post->mozoe}}"><br> --}}
<textarea name="mozoe" cols="30" rows="10" placeholder="توضیحات"></textarea><br>
<select name="tolid">
    <option value="strategic"{{($post->tolid == "strategic" )? 'selected' : ""}}>استراتژیک</option>
    <option value="first"{{($post->tolid == "first" )? 'selected' : ""}}>اول شخص</option>
    <option value="free"{{($post->tolid == "free" )? 'selected' : ""}}>مپ آزاد</option>
</select><br>
{{-- <input type="" name="tolid"value="{{$post->tolid}}"><br>
<input type="" name="forosh"value="{{$post->forosh}}"><br> --}}
<input type="submit" value="send">
</div>
</form>
</body>
</html>
