<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preview</title>
</head>

<body>
    <h1>User Preview</h1>
    <hr>
    <!-- lets  use blade syntax here -->
    <!-- <p>Name: ?php echo $name ?></p>
    <p>Email: ?php echo $email ?></p>
    <p>Phone: ?php echo $phone ?></p> -->

    {{-- lets use for each to print all value from db --}}

    @foreach($result as $r)
    <p>ID: {{$r->id}}</p>
    <p>Name: {{$r->name}}</p>
    <p>Email: {{$r->email}}</p>
    <p>Phone: {{$r->phone}}</p>
    @endforeach

    {{-- lets change it to route <a href="{{url('pnt/about/form')}}">Back</a> --}}
    <a href="{{route('about.form')}}">Back</a>
</body>

</html>
