<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function drinks() {
        return view('drinks');
    }

    public function entertainment() {
        return view('entertainment');
    }

    public function accommodation() {
//        $images = File::allFiles(storage_path() . '/app/accom/gallery');
        return view('accommodation', compact('images'));
    }

    public function contact() {
        return view('contact');
    }


}
