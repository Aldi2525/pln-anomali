@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Daftar Bay
                    <a href="{{ route('bay.create') }}" class="btn btn-sm btn-primary float-right">Tambah Bay</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tabelBay" class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Bay</th>
                                    <th>Gardu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bays as $bay)
                                    <tr>
                                        <td>{{ $bay->id }}</td>
                                        <td>{{ $bay->nama_bay }}</td>
                                        <td>{{ $bay->gardu->nama_gardu }}</td>
                                        <td>
                                            <a href="{{ route('bay.show', $bay->id) }}" class="btn btn-info">View</a>
                                            <a href="{{ route('bay.edit', $bay->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('bay.destroy', $bay->id) }}" method="POST"
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
            $('#tabelBay').DataTable();
        });
    </script>
@endpush
