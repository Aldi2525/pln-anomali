<?php

namespace App\Http\Controllers;

use App\Models\Gardu;
use Illuminate\Http\Request;

class GarduController extends Controller
{
    public function index()
    {
        $gardus = Gardu::all();
        return view('admin.gardu.index', compact('gardus'));
    }

    public function create()
    {
        return view('admin.gardu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_gardu' => 'required|string|max:255',
        ]);

        Gardu::create([
            'nama_gardu' => $request->nama_gardu,
        ]);

        return redirect()->route('gardu.index')->with('success', 'Gardu berhasil ditambahkan.');
    }

    public function show($id)
    {
        $gardu = Gardu::findOrFail($id);
        return view('admin.gardu.show', compact('gardu'));
    }

    public function edit($id)
    {
        $gardu = Gardu::findOrFail($id);
        return view('admin.gardu.edit', compact('gardu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_gardu' => 'required|string|max:255',
        ]);

        $gardu = Gardu::findOrFail($id);
        $gardu->update([
            'nama_gardu' => $request->nama_gardu,
        ]);

        return redirect()->route('gardu.index')->with('success', 'Gardu berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $gardu = Gardu::findOrFail($id);
        $gardu->delete();

        return redirect()->route('gardu.index')->with('success', 'Gardu berhasil dihapus.');
    }
}
