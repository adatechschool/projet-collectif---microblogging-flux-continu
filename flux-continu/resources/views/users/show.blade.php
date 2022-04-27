<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('/resources/css/app.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div>
            <h1>Hello {{$user->name}}</h1>
            <h2>{{$user->biographie}}</h2>
            <img src="https://cdn-icons-png.flaticon.com/512/2877/2877952.png">
        </div>
    </body>
</html>