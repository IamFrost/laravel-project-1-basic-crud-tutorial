<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Book</title>
</head>
<body>
    <form action={{ route('book.store') }}  method="post">
    @csrf
        <input type="text" name="name" placeholder="Book name">
        <br>
        <input type="text" name="author_name" placeholder="Author name">
        <br>
        <input type="date" name="publish_date">
        <br>
        <button>Submit</button>
    </form>
</body>
</html>
