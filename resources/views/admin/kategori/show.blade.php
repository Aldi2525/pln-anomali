@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Detail Kategori Anomali</h4>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Nama Kategori Anomali:</dt>
                        <dd class="col-sm-8">
                            <span class="badge badge-primary">{{ $kategori->nama_kategori }}</span>
                        </dd>
                    </dl>
                    <div class="text-right">
                        <a href="{{ route('phasa.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
