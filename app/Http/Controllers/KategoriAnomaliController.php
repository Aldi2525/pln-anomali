<?php
namespace App\Http\Controllers;

use App\Models\KategoriAnomali;
use Illuminate\Http\Request;

class KategoriAnomaliController extends Controller
{
    public function index()
    {
        $kategoriAnomalis = KategoriAnomali::all();
        return view('admin.kategori.index', compact('kategoriAnomalis'));
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nama_kategori' => 'required']);
        KategoriAnomali::create($request->all());
        return redirect()->route('kategori.index')->with('success', 'Kategori Anomali berhasil ditambahkan.');
    }

    public function show(KategoriAnomali $kategori)
    {
        return view('admin.kategori.show', compact('kategori'));
    }

    public function edit(KategoriAnomali $kategori)
    {
        return view('admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, KategoriAnomali $kategori)
    {
        $request->validate(['nama_kategori' => 'required']);
        $kategori->update($request->all());
        return redirect()->route('kategori.index')->with('success', 'Kategori Anomali berhasil diperbarui.');
    }

    public function destroy(KategoriAnomali $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori Anomali berhasil dihapus.');
    }
}