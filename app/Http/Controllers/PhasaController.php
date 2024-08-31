<?php
namespace App\Http\Controllers;

use App\Models\Phasa;
use Illuminate\Http\Request;

class PhasaController extends Controller
{
    public function index()
    {
        $phasas = Phasa::all();
        return view('admin.phasa.index', compact('phasas'));
    }

    public function create()
    {
        return view('admin.phasa.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nama_phasa' => 'required']);
        Phasa::create($request->all());
        return redirect()->route('phasa.index')->with('success', 'Phasa berhasil ditambahkan');
    }

    public function show(Phasa $phasa)
    {
        return view('admin.phasa.show', compact('phasa'));
    }

    public function edit(Phasa $phasa)
    {
        return view('admin.phasa.edit', compact('phasa'));
    }

    public function update(Request $request, Phasa $phasa)
    {
        $request->validate(['nama_phasa' => 'required']);
        $phasa->update($request->all());
        return redirect()->route('phasa.index')->with('success', 'Phasa berhasil diperbarui');
    }

    public function destroy(Phasa $phasa)
    {
        $phasa->delete();
        return redirect()->route('phasa.index')->with('success', 'Phasa berhasil dihapus');
    }
}