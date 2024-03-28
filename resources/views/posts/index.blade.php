<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>categuris</title>


</head>
<body>

    <div class="container">
        <h1>مقاله</h1>
<table class="table" border="1" style="width: 800px">
    <tr class="table-primary">
        <th>ردیف</th>
        <th>مقالات</th>
        <th>توضیحات</th>
        <th>دسته بندی</th>
        {{-- <th>فروش در سال</th>  --}}
        <th> حذف و ویرایش</th>

    </tr>
    <tr class="table-danger">
        @foreach ( $posts as $post)
        <td>{{$post->id}}</td>
        <td>{{$post->onvan}}</td>
        <td>{{$post->mozoe}}</td>
        <td>{{$post->tolid}}</td>
        {{-- <td>{{$post->forosh}}</td> --}}
        <td>

            <a href="/posts/edit/{{$post->id}}">Edit</a> /
            <form action="/posts/delete/{{$post->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>
</body>
</html>
