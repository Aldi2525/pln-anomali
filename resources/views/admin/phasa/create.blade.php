@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">Tambah Phasa</div>
                <div class="card-body">
                    <form action="{{ route('phasa.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_phasa">Nama Phasa</label>
                            <input type="text" name="nama_phasa" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('phasa.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
