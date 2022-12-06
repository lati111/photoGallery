<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'file' => 'required|mimes:png,jpg,jpeg|max:2048',
            'name' => 'required|string|between:4,32',
            'author' => 'required|string|between:4,32',
            'generator' => 'required|url',
            'description' => 'required|min:6',
            'category' => 'required|exists:gallery',
        ]);

        $fileName = time() . '.' . $request->file->extension();


        $request->file->move(public_path('images/' . $request->category), $fileName);

        /*
            Write Code Here for
            Store $fileName name in DATABASE from HERE
        */

        return back()
            ->with('success', 'Image added to gallery successfully.');
    }
}
