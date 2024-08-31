@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Daftar Peralatan
                    <a href="{{ route('peralatan.create') }}" class="btn btn-sm btn-primary float-right">Tambah Peralatan</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tabelPeralatan" class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Peralatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peralatans as $peralatan)
                                    <tr>
                                        <td>{{ $peralatan->id }}</td>
                                        <td>{{ $peralatan->nama_peralatan }}</td>
                                        <td>
                                            <a href="{{ route('peralatan.show', $peralatan->id) }}"
                                                class="btn btn-info">View</a>
                                            <a href="{{ route('peralatan.edit', $peralatan->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('peralatan.destroy', $peralatan->id) }}" method="POST"
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
            $('#tabelPeralatan').DataTable();
        });
    </script>
@endpush
