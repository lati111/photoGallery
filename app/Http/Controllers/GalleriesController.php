<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleriesController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('galleries', ["galleries" => $this->getGalleries()]);
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
}
