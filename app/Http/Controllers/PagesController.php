<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PagesController extends Controller
{

    function index() {


        $title = 'Welcome to my Laravel Project';
        return view('pages.index')->with('title', $title);
    }

    function about() {
        $title = "About us";
        return view('pages.about')->with('title', $title);
    }

    function cv() {
        $title = "CV";
        return view('pages.cv')->with('title', $title);
    }

    function services() {
        $title = 'Services';
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
