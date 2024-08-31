@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card shadow-lg border-primary">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        <i class="fas fa-tools"></i> Detail Peralatan
                    </h4>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h5 class="text-muted"><i class="fas fa-cogs"></i> Nama Peralatan</h5>
                        <p class="lead font-weight-bold">{{ $peralatan->nama_peralatan }}</p>
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

@push('scripts')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endpush
