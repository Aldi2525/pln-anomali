@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Tambah Gardu
                </div>
                <div class="card-body">
                    <form action="{{ route('gardu.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_gardu">Nama Gardu</label>
                            <input type="text" name="nama_gardu" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
