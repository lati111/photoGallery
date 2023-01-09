<!DOCTYPE html>
<html>

<head>
    <title>Photogallery - New Gallery</title>
</head>

<body>
    <div class="container">

        <div class="panel panel-primary">

            <div class="panel-heading">
                <h2>Create new gallery</h2>
            </div>

            <div>
                <a href="{{ route('galleries') }}"><button>&#x2190; To galleries</button></a>
            </div>

            <div class="panel-body">
                <form action="{{ route('gallery.new.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <table>
                        <tr>
                            <td><label for="name">Name:</label></td>
                            <td><input type="text" name="name" id="nameField" required></td>
                            <td>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><label for="description">Description:</label></td>
                        </tr>
                        <tr>
                            <td>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <textarea name="description" id="descriptionField" cols="30" rows="10" required minlength="6">
                                </textarea>
                                </td>
                        </tr>
                    </table>
                    <div><button type="submit" class="btn btn-success">Create</button></div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>
