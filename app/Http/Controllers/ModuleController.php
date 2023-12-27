<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modules;
use App\Models\Submaterial;
use Illuminate\Support\Facades\Auth;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Modules::orderBy('title', 'asc')->get(); // Fetch modules sorted by the 'title' column in ascending order
        return view('pages\module-page\module_index', compact('modules'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        
        // Fetch unique submaterial titles from the database
        $moduleTitles = Submaterial::distinct('subchapternumber')
        ->pluck('subchaptertitle', 'subchapternumber')
        ->map(function ($title, $number) {
            return "$number: $title";
        })
        ->toArray();

        // You can sort the moduleTitles array if needed
        sort($moduleTitles);
        
        
        $modules = new Modules;

        return view('pages\module-page\create', compact('moduleTitles', 'modules','user'));
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
            'title' => 'required|string|max:255',
            'color' => 'required|string|max:255',
        ]);

        $user = Auth::user();

        // Check if the '<link>title</link>' already exists for the specific user
        $existingModule = Modules::where('title', $request['title'])
                                    ->where('user_id', $user->id)
                                    ->first();

        if ($existingModule) {
            return redirect()->route('modules.index')->with('success', 'Module already exists for the user!');
        } else {
            $modules = new Modules();

            // Modify the 'link' value based on the '<link>title</link>' value
            $title = $request->input('title');
            $modifiedLink = str_replace('.', '-', substr($title, 0, 3));

            // Information from the form is copied to the database
            $modules->title = $request['title'];
            $modules->link = $modifiedLink;
            $modules->color = $request['color'];
            $modules->user_id = $user->id;

            // Save the action
            $modules->save();

            // Redirect to a success page or back to the form
            return redirect()->route('modules.index')->with('success', 'Module enrolled successfully');
        }
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
