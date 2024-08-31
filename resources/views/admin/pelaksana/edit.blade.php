@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-warning text-white">Edit Pelaksana</div>
                <div class="card-body">
                    <form action="{{ route('pelaksana.update', $pelaksana->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_pelaksana">Nama Pelaksana</label>
                            <input type="text" class="form-control" id="nama_pelaksana" name="nama_pelaksana"
                                value="{{ $pelaksana->nama_pelaksana }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('pelaksana.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
