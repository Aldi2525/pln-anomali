@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">
                        <i class="fas fa-box"></i> Detail Bay
                    </h4>
                </div>
                <div class="card-body">

                    <div class="mb-3">
                        <h5><i class="fas fa-tag"></i> Nama Bay:</h5>
                        <p class="lead">{{ $bay->nama_bay }}</p>
                    </div>
                    <div class="mb-3">
                        <h5><i class="fas fa-sitemap"></i> Gardu:</h5>
                        <p class="lead">{{ $bay->gardu->nama_gardu }}</p>
                    </div>
                    <div class="text-right">
                        <a href="{{ route('bay.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
