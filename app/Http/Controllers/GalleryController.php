<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Photo;

class GalleryController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function show(string $category)
    {
        $photos = $this->getPhotos($category);
        return view('gallery', ["category" => $category, "photos" => $photos]);
    }

    private function getPhotos(string $category): array {
        return Photo::select('id', 'name', 'author', 'generator', 'prompt', 'img')->where('category', $category)->get()->toArray();
    }
}
