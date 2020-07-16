<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new author</title>
</head>
<body>
<h1>Create new author</h1>
<form action="{{ route('author.store') }}"  method="post">
@csrf
<input type="text" name="name" placeholder="Author's Name"><br>
<input type="email" name="email" placeholder="Author's Email"><br>
<input type="date" name="date_of_birth" placeholder="Author's Date of birth"><br>

<button type="submit">Store</button>

</form>
</body>
</html>
