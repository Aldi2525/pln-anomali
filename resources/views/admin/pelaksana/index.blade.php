@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Daftar Pelaksana
                    <a href="{{ route('pelaksana.create') }}" class="btn btn-sm btn-primary float-right">Tambah Pelaksana</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tabelPelaksana" class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Pelaksana</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pelaksanas as $pelaksana)
                                    <tr>
                                        <td>{{ $pelaksana->id }}</td>
                                        <td>{{ $pelaksana->nama_pelaksana }}</td>
                                        <td>
                                            <a href="{{ route('pelaksana.show', $pelaksana->id) }}"
                                                class="btn btn-info">View</a>
                                            <a href="{{ route('pelaksana.edit', $pelaksana->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('pelaksana.destroy', $pelaksana->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#tabelPelaksana').DataTable();
        });
    </script>
@endpush
