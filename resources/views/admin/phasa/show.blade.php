@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-gradient-info text-white">
                    <h4 class="mb-0"><i class="fas fa-info-circle"></i> Detail Phasa</h4>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4"><i class="fas fa-bolt"></i> Nama Phasa :</dt>
                        <dd class="col-sm-8">
                            <p class="font-weight-bold text-primary">{{ $phasa->nama_phasa }}</p>
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
