<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager as Image;
use Illuminate\Http\Request;
use App\Models\Photo;

class UploadController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
            'name' => 'required|string|between:4,32',
            'author' => 'required|string|between:4,32',
            'generator' => 'required|url',
            'description' => 'required|min:6',
            'category' => 'required|exists:gallery',
        ]);

        $fileName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('images/' . $request->category), $fileName);

        $data = getimagesize('images/' . $request->category . "/" . $fileName);

        $photo = new Photo();
        $photo->name = $request->input('name');
        $photo->author = $request->input('author');
        $photo->generator = $request->input('generator');
        $photo->prompt = $request->input('description');
        $photo->category = $request->input('category');
        $photo->height = $data[1];;
        $photo->width = $data[0];
        $photo->img = $fileName;
        $photo->save();

        return back()
            ->with('success', 'Image added to gallery successfully.');
    }
}
