<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit author</title>
</head>
<body>
<h1>Edit author</h1>
{{-- here using put method for update wont work
    html form will only understand get or post
    but put is needed in web.php routes

    keeping only get or post will show error

    so what we need to do is keep form in post method
    then use @method('put')--}}
<form action="{{ route('author.update',$author->id) }}"   method="post">
@csrf
@method('put')
<input type="text" name="name" placeholder="Author's Name" value="{{$author->name}}"><br>
<input type="email" name="email" placeholder="Author's Email" value="{{$author->email}}"><br>
<input type="date" name="date_of_birth" placeholder="Author's Date of birth" value="{{$author->date_of_birth}}"><br>

<button type="submit">Update</button>

</form>
</body>
</html>
