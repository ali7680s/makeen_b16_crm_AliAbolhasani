<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>edit products</title>
</head>
<body>
    <div class="form-group row">
    <h1>edit products</h1>
<form action="/products/edit/{{$product->id}}" method="post">
    @csrf
<input type="text" name="name"value="{{$product->name}}"><br>
<input type="number" name="amount"value="{{$product->amount}}"><br>
<textarea name="description" cols="30" rows="10">{{ $product->description }}</textarea><br>
<select name="color">
    <option value="black"{{($product->color == "black" )? 'selected' : ""}}>black</option>
    <option value="white"{{($product->color == "white" )? 'selected' : ""}}>white</option>
</select><br>
<input type="submit" value="send">
</div>
</form>
</body>
</html>
