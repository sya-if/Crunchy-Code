<?php

namespace App\Http\Controllers\Admin;

use App\Models\Material;
use App\Models\Submaterial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SubmaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submaterials = Submaterial::all();

        return view('admin\submaterial\index', compact('submaterials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        $submaterial = Submaterial::find($id);

        return view('admin\submaterial\edit', compact('submaterial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submaterial $submaterial)
    {

        // Validation
        $this->validate($request, [
            'subchapternumber' => 'required|string|max:255',
            'subchaptertitle' => 'required|string|max:255',
        ]);

        $originalSubchapterNumber = $submaterial->getOriginal('subchapternumber');

        // Update material fields
        $submaterial->update([
            'subchapternumber' => $request['subchapternumber'],
            'subchaptertitle' => $request['subchaptertitle'],
            'modulenumber' => $request['modulenumber'],
        ]);

        $oldBladeFilePath = resource_path('views\pages\materials\module-' . $originalSubchapterNumber . '.blade.php');
        $newBladeFilePath = resource_path('views\pages\materials\module-' . $request['subchapternumber'] . '.blade.php');

        

        // Rename the Blade file if the subchapter number has changed
        if ($oldBladeFilePath !== $newBladeFilePath) {
            // Check if the old Blade file exists before renaming
            if (file_exists($oldBladeFilePath)) {
                rename($oldBladeFilePath, $newBladeFilePath);
            } else {
                dd('Cannot find the blade file');
            }
        }

        // Redirect or return response
        return redirect()->route('materials.index')->with('success', 'Submaterial updated successfully');

        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submaterial $submaterial)
    {
        // Get the path to the Blade file
        $bladeFilePath = resource_path('views/pages/materials/module-' . $submaterial->subchapternumber . '.blade.php');

        // Check if the Blade file exists before deleting
        if (File::exists($bladeFilePath)) {
            // Delete the Blade file
            File::delete($bladeFilePath);
        }

        $submaterial->delete();

        return redirect()->back()->with('success', 'Submaterial has been deleted!');
    }

    public function updateStatus(Request $request, Submaterial $submaterial)
    {
        $submaterial->update(['status' => 1]);

        return response()->json(['message' => 'Status updated successfully']);
    }
}
