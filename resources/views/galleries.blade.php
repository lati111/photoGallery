<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photogallery - gallery</title>

    <style>
        #galleryList{
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }
        .imgDisplay {
            display: grid;
            grid-template-columns: 4em 4em;
            grid-template-rows: 4em 4em;
        }
        .imgContainer {
            width: 4em;
            height: 4em;
        }
        .imgContainer img {
            object-fit: contain;
            width: 100%
        }
        .galleryTitle{
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <h1>Galleries</h1>
    <a href="{{ route('gallery.new.show') }}"><button>Create gallery</button></a>
    <div id="galleryList">
        @foreach ($galleries as $gallery)
            <div>
                <a class="galleryTitle" href="/gallery/{{ $gallery['title'] }}"><b>{{ $gallery['title'] }}</b></a>
                <div class="galleryListDesc">{{ $gallery['description'] }}</div>
                <div class="imgDisplay">
                    <div class="imgContainer" style="grid-column: 1; grid-row:1">
                        <img src="images/{{ $gallery['img1'] }}" alt="images/blank.png">
                    </div>
                    <div class="imgContainer" style="grid-column: 2; grid-row:1">
                        <img src="images/{{ $gallery['img2'] }}" alt="images/blank.png">
                    </div>
                    <div class="imgContainer" style="grid-column: 1; grid-row:2">
                        <img src="images/{{ $gallery['img3'] }}" alt="images/blank.png">
                    </div>
                    <div class="imgContainer" style="grid-column: 2; grid-row:2">
                        <img src="images/{{ $gallery['img4'] }}" alt="images/blank.png">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
