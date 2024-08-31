@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Edit Gardu
                </div>
                <div class="card-body">
                    <form action="{{ route('gardu.update', $gardu->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_gardu">Nama Gardu</label>
                            <input type="text" name="nama_gardu" class="form-control" value="{{ $gardu->nama_gardu }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
