<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::all();
        return view('admin\material\material_index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $material = new Material;
        return view('admin\material\create', compact('material'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $material = new Material();

        // Validate the input data
        $this->validate($request, [
            'modulenumber' => 'required|string|max:255',
            'moduletitle' => 'required|string|max:255',
            'subchapternumber' => 'required|string|max:255',
            'subchaptertitle' => 'required|string|max:255',
            'contenttitle' => 'required|string|max:255',
            'contentdescription' => 'required|string',
            'pagenumber' => 'required|string|max:255',
        ]);

        // Information from the form is copied to the database
        $material->modulenumber = $request['modulenumber'];
        $material->moduletitle = $request['moduletitle'];
        $material->subchapternumber = $request['subchapternumber'];
        $material->subchaptertitle = $request['subchaptertitle'];
        $material->contenttitle = $request['contenttitle'];
        $material->contentdescription = $request['contentdescription'];
        $material->pagenumber = $request['pagenumber'];

        // Save the action
        $material->save();

        // Redirect to a success page or back to the form
        Session()->flash('message', 'Material has been created!');
        return redirect()->route('materials.index');
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
    public function edit(Material $material)
    {
        return view('admin\material\edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        $validatedData = $request->validate([
            'modulenumber' => 'required|string|max:255',
            'moduletitle' => 'required|string|max:255',
            'subchapternumber' => 'required|string|max:255',
            'subchaptertitle' => 'required|string|max:255',
            'contenttitle' => 'required|string|max:255',
            'contentdescription' => 'required|string',
            'pagenumber' => 'required|string|max:255',
        ]);

        $material->update($validatedData);

        return redirect()->route('materials.index', $material)->with('success', 'Material updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        $material->delete();

        // Redirect to the view material page
        return redirect()->route('materials.index')->with('success', 'Material Deleted successfully');;
    }
}
