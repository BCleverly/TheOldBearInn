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
        return view('accommodation');
    }

    public function contact() {
        return view('contact');
    }


}
