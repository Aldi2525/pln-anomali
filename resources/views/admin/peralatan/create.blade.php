@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Tambah Peralatan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('peralatan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_peralatan">Nama Peralatan</label>
                            <input type="text" class="form-control @error('nama_peralatan') is-invalid @enderror"
                                id="nama_peralatan" name="nama_peralatan" value="{{ old('nama_peralatan') }}" required>
                            @error('nama_peralatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('peralatan.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
