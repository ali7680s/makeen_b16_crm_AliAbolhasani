<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>products list</title>


</head>
<body>

    <div class="container">
        <h1>products list</h1>
<table class="table" border="1" style="width: 800px">
    <tr class="table-primary">
        <th>ID</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Color</th>
        <th>manage</th>
    </tr>
    <tr class="table-danger">
        @foreach ( $products as $product)
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->amount}}</td>
        <td>{{$product->color}}</td>
        <td>

            <a href="/products/edit/{{$product->id}}">Edit</a> /
            <form action="/products/delete/{{$product->id}}" method="post">
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
