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
        <input type="text" name="onvan" placeholder="مقالات"><br>
        {{-- <type="text" name="mozoe" placeholder="موضوع"><br> --}}
        <textarea name="mozoe" cols="50" rows="8" placeholder="توضیحات"></textarea><br>
        <select name="tolid">
            <option value="strategic">استراتژیک</option>
            <option value="first">اول شخض</option>
            <option value="free">مپ آزاد</option>
        </select> <br>
        {{-- <input type="" name="tolid" placeholder="تولید"><br>
<input type="" name="forosh" placeholder="فروش در سال"><br> --}}
        <input type="submit" value="send">
    </form>
</body>

</html>
