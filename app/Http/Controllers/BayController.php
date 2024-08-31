<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bay;
use App\Models\Gardu;
use Illuminate\Http\Request;

class BayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bays = Bay::with('gardu')->get();
        return view('admin.bay.index', compact('bays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gardus = Gardu::all();
        return view('admin.bay.create', compact('gardus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gardu_id' => 'required|exists:gardus,id',
            'nama_bay' => 'required|string|max:255',
        ]);

        Bay::create($request->all());
        return redirect()->route('bay.index')->with('success', 'Bay created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bay $bay)
    {
        return view('admin.bay.show', compact('bay'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bay $bay)
    {
        $gardus = Gardu::all();
        return view('admin.bay.edit', compact('bay', 'gardus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bay $bay)
    {
        $request->validate([
            'gardu_id' => 'required|exists:gardus,id',
            'nama_bay' => 'required|string|max:255',
        ]);

        $bay->update($request->all());
        return redirect()->route('bay.index')->with('success', 'Bay updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bay $bay)
    {
        $bay->delete();
        return redirect()->route('bay.index')->with('success', 'Bay deleted successfully.');
    }
}