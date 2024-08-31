@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Edit Bay
                </div>
                <div class="card-body">
                    <form action="{{ route('bay.update', $bay->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="gardu_id">Gardu</label>
                            <select name="gardu_id" id="gardu_id" class="form-control" required>
                                @foreach ($gardus as $gardu)
                                    <option value="{{ $gardu->id }}"
                                        {{ $bay->gardu_id == $gardu->id ? 'selected' : '' }}>
                                        {{ $gardu->nama_gardu }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_bay">Nama Bay</label>
                            <input type="text" name="nama_bay" id="nama_bay" class="form-control"
                                value="{{ $bay->nama_bay }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('bay.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
