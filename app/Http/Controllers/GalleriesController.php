<?php

namespace App\Http\Controllers;

class GalleriesController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('galleries');
    }
}
