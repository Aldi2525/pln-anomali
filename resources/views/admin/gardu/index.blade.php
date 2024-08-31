@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Daftar Gardu
                    <a href="{{ route('gardu.create') }}" class="btn btn-sm btn-primary float-right">Tambah Gardu</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tabelGardu" class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Gardu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gardus as $gardu)
                                    <tr>
                                        <td>{{ $gardu->id }}</td>
                                        <td>{{ $gardu->nama_gardu }}</td>
                                        <td>
                                            <a href="{{ route('gardu.show', $gardu->id) }}" class="btn btn-info">View</a>
                                            <a href="{{ route('gardu.edit', $gardu->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('gardu.destroy', $gardu->id) }}" method="POST"
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
            $('#tabelGardu').DataTable();
        });
    </script>
@endpush
