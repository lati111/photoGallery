<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photogallery - {{$category}}</title>

    <style>
        #gallery {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }
        .imgContainer {
            width: 12em;
            height: 12em;
        }
        .imgContainer img {
            object-fit: contain;
            width: 100%
        }
        .photoAuthor {
            float: right;
            color: grey;
        }
        .photoGenerator {
            float: right;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
    <h1>{{$category}}</h1>
    <div>
        <a href="{{ route('galleries') }}"><button>&#x2190; To galleries</button></a>
        <br>
        <a href="{{ route('upload', ["category" => $category]) }}"><button>Upload image</button></a>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div id="gallery">
        @foreach ($photos as $photo)
            <div class="photoContainer">
                <div class="imgContainer"><img src="/images/{{$category}}/{{$photo["img"]}}"></div>
                <div>
                    <span class="photoTitle">{{$photo["name"]}}</span>
                    <span class="photoAuthor">{{$photo["author"]}}</span>
                </div>
                <div>
                    <span class="photoPrompt">{{$photo["prompt"]}}</span>
                </div>
                <div>
                    <a href="{{$photo["generator"]}}"><span class="photoGenerator">{{$photo["generator"]}}</span></a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
