<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>About Form</title>
</head>


<body>
    <h1>About Form</h1>
<!-- suppose, i copy bitm website forms action. then i design my own site and paste
the action in my page, this is called CROSS SITE REQUEST FORGERY - CSRF -->

<!-- <form action=?php echo url'pnt/about/preview' ?>" method="post">
if i only write this it shows, 419 expired. so i should also get a token
if token is matched, only then data is submitted, otherwise hackers will send
a lot of data, and it would cause problem to server. this thing is also same for
post, put, delete. this token is CSRF token. right click on page then
goto inspect to see the token-->


<!-- u dont need to write php tag/echo in laravel, laravel use template engine that
traslates your code to php, One of the templete engines is blade

how to make sure ur file is running by blade? to do that, we need to rename the file
lets make it form.php to form.blade.php-->

{{-- this was old form code , i removed the < in comment, so that i can comment --}}
{{-- <form action="?php echo url('pnt/about/preview') ?>" method="post"> --}}
{{-- lets rewrite it , btw double curly double dash is comment
and only double curly means, inside it, there are php codes. print and php code it means
 this is blade syntax--}}

 {{-- another thing is donot use url function --}}
 {{-- if u do, u have to change everywhere u used it --}}
 {{-- so in routes folder, go to the file where all routes are written --}}
 {{-- and use a name to the router, then in html u just use the route name --}}
 {{-- so each time, even if url changes, we can just call route name --}}
 {{-- <form action={{ url('pnt/about/preview') }}  method="post"> --}}
    <form action={{ route('preview') }}  method="post">
        {{-- btw when u file is in blade, u dont need to write the whole input field
            for csrf token, just use @csrf, so change the line below --}}
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
    @csrf
        <input type="text" name="id_code" placeholder="ID">
        <br>
        <input type="text" name="full_name" placeholder="Name">
        <br>
        <input type="emil" name="email_address" placeholder="Email">
        <br>
        <input type="text" name="phone_number" placeholder="Phone">
        <br>
        <button>Preview</button>
    </form>
</body>

</html>
