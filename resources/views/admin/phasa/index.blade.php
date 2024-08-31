@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Daftar Phasa
                    <a href="{{ route('phasa.create') }}" class="btn btn-sm btn-primary float-right">Tambah Phasa</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tabelPhasa" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Phasa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($phasas as $phasa)
                                    <tr>
                                        <td>{{ $phasa->id }}</td>
                                        <td>{{ $phasa->nama_phasa }}</td>
                                        <td>
                                            <a href="{{ route('phasa.show', $phasa->id) }}" class="btn btn-info">View</a>
                                            <a href="{{ route('phasa.edit', $phasa->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('phasa.destroy', $phasa->id) }}" method="POST"
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
            $('#tabelPhasa').DataTable();
        });
    </script>
@endpush
