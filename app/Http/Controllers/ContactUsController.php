<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rules\Uppercase;

class ContactUsController extends Controller
{
    //

    function index()
    {
        $title = 'Contact us';

        return view ('pages.contactus')->with('title', $title);

    }

    function store(Request $request)
    {

        $validateData = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);


    }
}
