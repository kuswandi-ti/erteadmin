@extends('layouts.member.master')

@section('page_title')
    {{ __('Dashboard') }}
@endsection

@section('section_header_title')
    {{ __('Dashboard') }}
@endsection

@section('section_header_breadcrumb')
    @parent
@endsection

@section('page_content')
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="card custom-card">
                <div class="flex-wrap card-header d-flex align-items-center flex-xxl-nowrap">
                    <div class="flex-fill">
                        <div class="card-title">
                            {{ __('Menambah Data Range Harga') }}
                            <p class="subtitle text-muted fs-12 fw-normal">
                                {{ __('Silahkan input data untuk proses menambah data range harga') }}
                            </p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <a href="#" class="btn btn-warning">
                            {{ __('Kembali') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    dfgfg
                </div>
            </div>
        </div>
    </div>
@endsection
