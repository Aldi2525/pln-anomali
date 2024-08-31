@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Daftar Kategori Anomali
                    <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-primary float-right">Tambah Kategori</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tabelKategori" class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategoriAnomalis as $kategori)
                                    <tr>
                                        <td>{{ $kategori->id }}</td>
                                        <td>{{ $kategori->nama_kategori }}</td>
                                        <td>
                                            <a href="{{ route('kategori.show', $kategori->id) }}"
                                                class="btn btn-info">View</a>
                                            <a href="{{ route('kategori.edit', $kategori->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST"
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
            $('#tabelKategori').DataTable();
        });
    </script>
@endpush
