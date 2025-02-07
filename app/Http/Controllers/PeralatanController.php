<?php
namespace App\Http\Controllers;

use App\Models\Peralatan;
use Illuminate\Http\Request;

class PeralatanController extends Controller
{
/**
 * Display a listing of the resource.
 */
    public function index()
    {
        $peralatans = Peralatan::all();
        return view('admin.peralatan.index', compact('peralatans'));
    }

/**
 * Show the form for creating a new resource.
 */
    public function create()
    {
        return view('admin.peralatan.create');
    }

/**
 * Store a newly created resource in storage.
 */
    public function store(Request $request)
    {
        $request->validate([
            'nama_peralatan' => 'required|string|max:255',
        ]);

        Peralatan::create($request->all());
        return redirect()->route('peralatan.index')->with('success', 'Peralatan created successfully.');
    }

/**
 * Display the specified resource.
 */
    public function show(Peralatan $peralatan)
    {
        return view('admin.peralatan.show', compact('peralatan'));
    }

/**
 * Show the form for editing the specified resource.
 */
    public function edit(Peralatan $peralatan)
    {
        return view('admin.peralatan.edit', compact('peralatan'));
    }

/**
 * Update the specified resource in storage.
 */
    public function update(Request $request, Peralatan $peralatan)
    {
        $request->validate([
            'nama_peralatan' => 'required|string|max:255',
        ]);

        $peralatan->update($request->all());
        return redirect()->route('peralatan.index')->with('success', 'Peralatan updated successfully.');
    }

/**
 * Remove the specified resource from storage.
 */
    public function destroy(Peralatan $peralatan)
    {
        $peralatan->delete();
        return redirect()->route('peralatan.index')->with('success', 'Peralatan deleted successfully.');
    }
}