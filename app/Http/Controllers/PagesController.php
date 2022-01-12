<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {

        return view('pages.home');
    }

    public function events() {

        return view('pages.events');
    }

    public function profile() {

        return view('pages.profile');
    }
}
