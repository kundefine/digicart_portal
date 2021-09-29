<?php

namespace App\Http\Controllers;

use App\Models\FormGenerator;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function exampleGet()
    {
//        return FormGenerator::find(3)->printHtml();
    }

    public function examplePost(Request $request)
    {
        return dd($request->all());
    }

    public function exampleAuth()
    {

    }
}
