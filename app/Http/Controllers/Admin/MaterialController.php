<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Submaterial;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // Retrieve all materials
        $materials = Material::all();
        $submaterials = Submaterial::all();
        
        return view('admin\material\material_index', compact('materials', 'submaterials'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $material = new Material;
        $submaterial = new Submaterial;

        return view('admin\material\create', compact('material', 'submaterial'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    

    public function store(Request $request)
    {
        // Validate the input data
        $this->validate($request, [
            'modulenumber' => 'required|string|max:255',
            'moduletitle' => 'required|string|max:255',
            'description' => 'required|string',
            'subchapternumber' => 'required|string|max:255',
            'subchaptertitle' => 'required|string|max:255',
        ]);
    
        // Find or create the material based on modulenumber
        $material = Material::firstOrCreate(['modulenumber' => $request['modulenumber']], [
            'moduletitle' => $request['moduletitle'],
            'description' => $request['description'],
        ]);
    
        // Create a new Submaterial instance
        $submaterial = new Submaterial();
    
        // Set the values for the submaterial
        $submaterial->subchapternumber = $request['subchapternumber'];
        $submaterial->subchaptertitle = $request['subchaptertitle'];
    
        // Associate the submaterial with the material
        $submaterial->materials()->associate($material);
    
        // Save the submaterial
        $submaterial->save();
    
        // Redirect to a success page or back to the form
        session()->flash('message', 'Material and Submaterial has been created!');
        return redirect()->route('materials.index');
    }
     
     
     
     
     

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show(Material $material)
    {
        // Get the associated Submaterials
        $submaterials = $material->submaterial;
    
        return view('admin\material\show', compact('material', 'submaterials'));
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


    public function editShow(Material $material)
    {
        return view('admin\material\editShow', compact('material'));
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
        // Validate the request data for editing material_index
        $request->validate([
            'modulenumber' => 'required|string|max:255',
            'moduletitle' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Update material fields
        $material->update([
            'modulenumber' => $request['modulenumber'],
            'moduletitle' => $request['moduletitle'],
            'description' => $request['description'],
        ]);

        // Redirect or return response
        return redirect()->route('materials.index')->with('success', 'Material has been updated!');
    }
     
     
    public function updateShow(Request $request, Material $material)
    {
        // Validate the request data for editing show.blade
        $request->validate([
            'subchapternumber' => 'required|string|max:255',
            'subchaptertitle' => 'required|string|max:255',
        ]);

        // Check if subchapter fields are present in the request
        if ($request->has('subchapternumber') && $request->has('subchaptertitle')) {
            // Delete existing submaterials first
            $material->submaterials()->delete();

            // Create new submaterial
            $material->submaterials()->create([
                'subchapternumber' => $request['subchapternumber'],
                'subchaptertitle' => $request['subchaptertitle'],
            ]);
        }

        // Redirect or return response
        return redirect()->route('materials.show', $material)->with('success', 'Submaterial has been updated!');
    } 


     
     
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        // Delete the material and its associated submaterials
        $material->delete();

        // Redirect to a success page or back to the index
        session()->flash('message', 'Material and associated submaterials have been deleted!');
        return redirect()->route('materials.index');
    }

    public function destroySubmaterial(Submaterial $submaterial)
    {
        // Delete the submaterial only
        $submaterial->delete();

        // Redirect to a success page or back to the show page
        session()->flash('message', 'Submaterial has been deleted!');
        return redirect()->back();
    }


}
