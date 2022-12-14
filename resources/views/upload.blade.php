<!DOCTYPE html>
<html>

<head>
    <title>Photogallery - upload</title>

    <style>
        .text-danger {
            font-weight: bold;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="panel panel-primary">

            <div class="panel-heading">
                <h2>Upload a photo</h2>
            </div>

            <div>
                <a href="{{ route('galleries') }}"><button>&#x2190; To galleries</button></a>
            </div>

            <div class="panel-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="category" id="categorySelector" value="{{ $category }}">

                    <table>
                        <tr>
                            <td><label class="form-label" for="inputFile">Image:</label></td>
                            <td>
                                <input type="file" name="file" id="inputFile"
                                    class="form-control @error('file') is-invalid @enderror">
                            </td>
                            <td>
                                @error('file')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="name">Name:</label></td>
                            <td><input type="text" name="name" id="nameField" required><span>
                                </span></td>
                            <td>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="author">Author:</label></td>
                            <td><input type="text" name="author" id="authorField" required minlength="4"
                                    maxlength="32">
                            </td>
                            <td>
                                @error('author')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="generator">Generator:</label></td>
                            <td><input type="url" name="generator" id="generatorField" required minlength="4"
                                    maxlength="32">
                            </td>
                            <td>
                                @error('generator')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><label for="description">Prompt:</label></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <textarea name="description" id="descriptionField" cols="30" rows="10" required minlength="2">
                                </textarea>
                            </td>
                        </tr>
                    </table>
                    <div><button type="submit" class="btn btn-success">Upload</button></div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>
