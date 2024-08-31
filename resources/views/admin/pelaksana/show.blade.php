@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-gradient-info text-white text-center py-4">
                    <h4 class="font-weight-bold">Detail Pelaksana</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-4 text-center">
                            <div class="icon-box bg-gradient-info text-white rounded-circle mx-auto"
                                style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-user-tie fa-2x"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <dl class="row">
                                <dt class="col-sm-4">Nama Pelaksana:</dt>
                                <dd class="col-sm-8 font-weight-bold text-primary">{{ $pelaksana->nama_pelaksana }}</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('pelaksana.index') }}" class="btn btn-secondary btn-lg"><i
                                class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
