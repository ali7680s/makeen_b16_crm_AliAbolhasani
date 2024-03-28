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
        <h1>دسته بندی </h1>
<table class="table" border="1" style="width: 800px">
    <tr class="table-primary">
        <th>ردیف</th>
        <th>نام دسته</th>
        {{-- <th>مدل</th>
        <th>قیمت</th>
        <th>توضیحات</th>
        <th>آدرس فروشگاه</th> --}}
        <th> حذف و ویرایش</th>

    </tr>
    <tr class="table-danger">
        @foreach ( $categuris as $cate)
        <td>{{$cate->id}}</td>
        <td>{{$cate->dastgah}}</td>
        {{-- <td>{{$cate->mode}}</td>
        <td>{{$cate->fee}}</td>
        <td>{{$cate->toz}}</td>
        <td>{{$cate->foroshgah}}</td> --}}
        <td>

            <a href="/categuris/edit/{{$cate->id}}">Edit</a> /
            <form action="/categuris/delete/{{$cate->id}}" method="post">
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
