<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('/resources/css/app.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div>
            <img id="pp" src="https://cdn-icons-png.flaticon.com/512/2877/2877952.png" height="100px" width="100px">
            <div>
                <h1>Hello {{$user->name}}</h1>
                <h2>{{$user->biographie}}</h2>
            </div>
            <form action="" method="#">
                <textarea name="" id="" cols="30" rows="10"></textarea> <br>
                <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" multiple>
                <input type="submit" value="Send">
            </form>
            
            <div>
                @foreach ($user->posts as $post) 
                <img src="{{ url($post->img_url) }}" alt="post images">
                    <p>{{$post->description}}</p>
                @endforeach
            </div>
        </div>
    </body>
</html>