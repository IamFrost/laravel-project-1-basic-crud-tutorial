<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit book</title>
</head>
<body>
<h1>Edit book</h1>
<form action="{{ route('book.update',$book->id) }}"   method="post">
@csrf
@method('put')
<input type="text" name="name" placeholder="Book name" value="{{$book->name}}"><br>
<input type="text" name="author_name" placeholder="Author name" value="{{$book->author_name}}"><br>
<input type="date" name="publish_date" value="{{$book->publish_date}}"><br>

<button type="submit">Update</button>

</form>
</body>
</html>
