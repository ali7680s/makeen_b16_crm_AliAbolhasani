<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>لیست کاربران</title>


</head>
<body>

    <div class="container">
        <h1>لسیت کاربران</h1>
<table class="table" border="1" style="width: 800px">
    <tr class="table-primary">
        <th>ردیف</th>
        <th>نام خریدار</th>
        <th>تاریخ</th>
        <th>کد سفارش</th>
        <th>کد پستی</th>
        <th>آدرس</th>
        <th>manage</th>
    </tr>
    <tr class="table-danger">
        @foreach ( $orders as $order)
        <td>{{$order->id}}</td>
        <td>{{$order->first}}</td>
        <td>{{$order->tarikh}}</td>
        <td>{{$order->code_sefaresh}}</td>
        <td>{{$order->code_posti}}</td>
        <td>{{$order->address}}</td>
        <td>

            <a href="/orders/edit/{{$order->id}}">Edit</a> /
            <form action="/orders/delete/{{$order->id}}" method="post">
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
