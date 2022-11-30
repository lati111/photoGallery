<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);

        $fileName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads'), $fileName);

        /*
            Write Code Here for
            Store $fileName name in DATABASE from HERE
        */

        return back()
            ->with('success', 'You have successfully upload file.')
            ->with('file', $fileName);
    }
}
