<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photogallery - gallery</title>

    <style>
        .galleryListDesc {
            margin-left: 1.2em;
        }
    </style>
</head>
<body>
    <h1>Galleries</h1>
    <ul>
        @foreach ($galleries as $gallery)
            <li>
                <a href="/gallery/{{$gallery["title"]}}">{{$gallery["title"]}}</a>
                <div class="galleryListDesc">{{$gallery["description"]}}</div>
            </li>
        @endforeach
    </ul>
</body>
</html>
