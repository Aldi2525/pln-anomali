@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-warning text-white">Edit Phasa</div>
                <div class="card-body">
                    <form action="{{ route('phasa.update', $phasa->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_phasa">Nama Phasa</label>
                            <input type="text" name="nama_phasa" value="{{ $phasa->nama_phasa }}" class="form-control"
                                required>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('phasa.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
