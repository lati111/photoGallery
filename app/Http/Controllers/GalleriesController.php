<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function show()
    {
        return view('galleries', ["galleries" => $this->getGalleries()]);
    }

    public function showUpload()
    {
        return view('newGallery');
    }

    private function getGalleries(): array {
        $galleries = [];
        foreach (Gallery::all() as $gallery) {
            $arr = [];
            $arr["title"] = $gallery["category"];
            $arr["description"] = $gallery["description"];
            $galleries[] = $arr;
        }
        return $galleries;
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|between:4,32',
            'description' => 'required|min:6',
        ]);

        $gallery = new Gallery();
        $gallery->category = $request->input('name');
        $gallery->description = $request->input('description');
        $gallery->save();

        return redirect()->route("gallery", ["category" => $request->input('name')])
            ->with('success', 'Gallery created successfully.');
    }
}
