@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">Tambah Kategori Anomali</div>
                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
