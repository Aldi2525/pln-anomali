@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        <i class="fas fa-building"></i> Detail Gardu
                    </h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h5><i class="fas fa-map-marker-alt"></i> Nama Gardu:</h5>
                        <p class="lead">{{ $gardu->nama_gardu }}</p>
                    </div>
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
