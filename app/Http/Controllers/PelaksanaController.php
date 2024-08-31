<?php
namespace App\Http\Controllers;

use App\Models\Pelaksana;
use Illuminate\Http\Request;

class PelaksanaController extends Controller
{
    public function index()
    {
        $pelaksanas = Pelaksana::all();
        return view('admin.pelaksana.index', compact('pelaksanas'));
    }

    public function create()
    {
        return view('admin.pelaksana.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelaksana' => 'required|string|max:255',
        ]);

        Pelaksana::create($request->all());
        return redirect()->route('pelaksana.index')->with('success', 'Pelaksana berhasil ditambahkan.');
    }

    public function show(Pelaksana $pelaksana)
    {
        return view('admin.pelaksana.show', compact('pelaksana'));
    }

    public function edit(Pelaksana $pelaksana)
    {
        return view('admin.pelaksana.edit', compact('pelaksana'));
    }

    public function update(Request $request, Pelaksana $pelaksana)
    {
        $request->validate([
            'nama_pelaksana' => 'required|string|max:255',
        ]);

        $pelaksana->update($request->all());
        return redirect()->route('pelaksana.index')->with('success', 'Pelaksana berhasil diperbarui.');
    }

    public function destroy(Pelaksana $pelaksana)
    {
        $pelaksana->delete();
        return redirect()->route('pelaksana.index')->with('success', 'Pelaksana berhasil dihapus.');
    }
}