
<!doctype html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link content-type="text/css" rel="stylesheet" href="public\css\app.css">
        
    </head>
    <body style="background-color : #ffa6c1;">
    
        <div>
            <div style="display : flex;">
            <img id="pp" src="https://cdn-icons-png.flaticon.com/512/2877/2877952.png" height="100px" width="100px">
            <div style="margin-left : 20px; background-color : #feeafa; border : solid; border-radius : 10px 70px / 120px;>
                <h1 style="color: red;">Hello {{$user->name}}</h1>
                <h2>{{$user->biographie}}</h2>
            </div>
</div>
            <form action="" method="#" style="margin-top : 20px">
                <textarea name="" id="" cols="30" rows="10"></textarea> <br>
                <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" multiple>
                <input type="submit" value="Send">
            </form>
            
            <center><div>
                @foreach ($user->posts as $post) 
                <img src="{{ url($post->img_url) }}" alt="post images">
                    <p>{{$post->description}}</p>
                @endforeach
            </div></center>
        </div>
    </body>
</html>