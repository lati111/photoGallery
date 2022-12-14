<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photogallery - {{$category}}</title>

    <style>
    </style>
</head>
<body>
    <h1>{{$category}}</h1>
    <div>
        @foreach ($photos as $photo)
            <div class="photoContainer">
                <div class="imgContainer"><img src="/images/{{$category}}/{{$photo["img"]}}"></div>
                <div>
                    <span class="photoTitle">{{$photo["name"]}}</span>
                    <span class="photoAuthor">{{$photo["author"]}}</span>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
