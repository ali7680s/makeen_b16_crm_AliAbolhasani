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
        <th>نام</th>
        <th>نام خانوادگی</th>
        <th>شماره موبایل</th>
        <th>رمز عبور</th>
        <th>manage</th>
    </tr>
    <tr class="table-danger">
        @foreach ( $users as $user)
        <td>{{$user->id}}</td>
        <td>{{$user->first_name}}</td>
        <td>{{$user->last_name}}</td>
        <td>{{$user->phone_number}}</td>
        <td>{{$user->password}}</td>
        <td>

            <a href="/users/edit/{{$user->id}}">Edit</a> /
            <form action="/users/delete/{{$user->id}}" method="post">
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
