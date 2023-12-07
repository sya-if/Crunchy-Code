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

        $moduleTitles = [
            "1.1 Strategi Penyelesaian Masalah",
            "1.2 Algoritma",
            "1.3 Pemboleh Ubah, Pemalar dan Jenis Data",
            "1.4 Struktur Kawalan",
            "1.5 Amalan Terbaik Pengaturcaraan",
            "1.6 Struktur Data dan Modular",
            "1.7 Pembangunan Aplikasi",
            "2.1 Pangkalan Data Hubungan",
            "2.2 Reka Bentuk Pangkalan Data Hubungan",
            "2.3 Pembangunan Pangkalan Data Hubungan",
            "2.4 Pembangunan Sistem Pangkalan Data",
            "3.1 Reka Bentuk Interaksi",
            "3.2 Paparan dan Reka Bentuk Skrin",
        ];
        $modules = new Modules;

        return view('pages\module-page\create', compact('moduleTitles', 'modules'));
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

        // Check if the '<link>title</link>' already exists in the database
        $existingModule = Modules::where('title', $request['title'])->first();
        if ($existingModule) {
            return redirect()->route('modules.index')->with('success', 'modules already exist!');
        } else {
            $modules = new Modules();

            // Modify the 'link' value based on the '<link>title</link>' value
            $title = $request->input('title');
            $modifiedLink = str_replace('.', '-', substr($title, 0, 3));

            // Information from the form is copied to the database
            $modules->title = $request['title'];
            $modules->link = $modifiedLink;
            $modules->color = $request['color'];

            // Save the action
            $modules->save();

            // Redirect to a success page or back to the form
            return redirect()->route('modules.index')->with('success', 'modules enrolled successfully');
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
