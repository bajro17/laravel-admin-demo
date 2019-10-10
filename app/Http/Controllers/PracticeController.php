<?php

namespace App\Http\Controllers;

use App\Practice;
use App\Field;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $practice = Practice::paginate(10);
        return view('admin.practice.index', ['practice' => $practice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Field::all();
        return view('admin.practice.create', ['tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'logo' => 'dimensions:min_width=100,min_height=100'
        ]);

        $practice = new Practice;
        $practice->name = $request->input('name');
        $practice->email = $request->input('email');
        $practice->website = $request->input('website');
        $practice->logo = $request->file('logo')->store('public/logo');
        
        
        $practice->save();
        $tags = $request->input('tag');
        $practice->fields()->attach($tags);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function show(Practice $practice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function edit(Practice $practice)
    {
        $tags = Field::all();
        return view('admin.practice.edit',['practice' => $practice, 'tags' => $tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Practice $practice)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'logo' => 'dimensions:min_width=100,min_height=100'
        ]);

        
        $practice->name = $request->input('name');
        $practice->email = $request->input('email');
        $practice->website = $request->input('website');
        if($request->hasFile('logo')) {
        $practice->logo = $request->file('logo')->store('logo');
        }
        $practice->update();
        $tags = $request->input('tag');
        $practice->fields()->sync($tags);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Practice $practice)
    {
        Practice::destroy($practice->id);
        return back();
    }
}
