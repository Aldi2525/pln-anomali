@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-warning text-white">Edit Kategori Anomali</div>
                <div class="card-body">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                                value="{{ $kategori->nama_kategori }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
