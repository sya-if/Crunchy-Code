<?php

namespace App\Http\Controllers\Admin;

use App\Models\Material;
use App\Models\Submaterial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        // Update material fields
        $submaterial->update([
            'subchapternumber' => $request['subchapternumber'],
            'subchaptertitle' => $request['subchaptertitle'],
            'modulenumber' => $request['modulenumber'],
        ]);


        // Redirect or return response
        return redirect()->back()->with('success', 'Submaterial has been updated!');
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submaterial $submaterial)
    {
        $submaterial->delete();

        return redirect()->back()->with('success', 'Submaterial has been deleted!');
    }

    public function updateStatus(Request $request, Submaterial $submaterial)
    {
        $submaterial->update(['status' => 1]);

        return response()->json(['message' => 'Status updated successfully']);
    }
}
