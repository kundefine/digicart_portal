<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormGenerator;
use Illuminate\Http\Request;

class FormGeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formGeneratorIndex()
    {
        return view('users.admin.form-generator.formGeneratorIndex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formGeneratorcreate()
    {
        return view('users.admin.form-generator.formGeneratorCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function formGeneratorStore(Request $request)
    {
      return FormGenerator::create([
            "name" => $request->formGen["name"],
            "uuid" => $request->formGen["uuid"],
            "content_json" => json_encode($request->formGen["data"]),
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormGenerator  $formGenerator
     * @return \Illuminate\Http\Response
     */
    public function formGeneratorshow(FormGenerator $formGenerator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormGenerator  $formGenerator
     * @return \Illuminate\Http\Response
     */
    public function formGeneratoEdit(FormGenerator $formGenerator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormGenerator  $formGenerator
     * @return \Illuminate\Http\Response
     */
    public function formGeneratorUpdate(Request $request, FormGenerator $formGenerator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormGenerator  $formGenerator
     * @return \Illuminate\Http\Response
     */
    public function formGeneratorDestroy(FormGenerator $formGenerator)
    {
        //
    }
}
