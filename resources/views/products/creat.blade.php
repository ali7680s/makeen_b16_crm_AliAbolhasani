<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>creat products</title>

</head>
<body>
    <h1>creat products</h1>
<form action="/products/create" method="post">
    @csrf
<input type="text" name="name" placeholder="name"><br>
<input type="number" name="amount" placeholder="amount"><br>
<textarea name="description" cols="30" rows="10" placeholder="description"></textarea><br>
<select name="color">
    <option value="black">black</option>
    <option value="white">white</option>
</select><br>
<input type="submit" value="send">
</form>
</body>
</html>
