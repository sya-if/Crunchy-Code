<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modules;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Modules::all();
        return view('pages\module-page\module_index', compact('modules'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = new Modules;
        return view('pages\module-page\create', compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modules = new Modules();

        // Validate the input data
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'color' => 'required|string|max:255',
        ]);
        
        // Modify the 'link' value based on the 'title' value
        $title = $request->input('title');
        $modifiedLink = str_replace('.', '-', substr($title, 0, 3));


        // Information from the form is copied to the database
        $modules->title = $request['title'];
        $modules->link = $modifiedLink;
        $modules->color = $request['color'];

        // Save the action
        $modules->save();

        // Redirect to a success page or back to the form
        Session()->flash('message', 'module has been created!');
        return redirect()->route('modules.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Modules $module)
    {
        return view('pages\module-page\edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modules $module)
    {
        $validatedData = $request->validate([
            'color' => 'required|string|max:255',
        ]);

        $module->update($validatedData);

        return redirect()->route('modules.index', $module)->with('success', 'modules updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modules $module)
    {
        $module->delete();

        // Redirect to the view modules page
        return redirect()->route('modules.index')->with('success', 'module Deleted successfully');;
    }
}
