@extends('admin.layouts.master')

@section('page_title')
    {{ __('Permission') }}
@endsection

@section('header')
    <div class="appHeader">
        <div class="left">
            @include('admin.layouts.partials._sidebar_panel')
        </div>

        <div class="pageTitle">
            {{ __('Permission') }}
        </div>

        <div class="right">
            @include('admin.layouts.partials._logout_panel')
        </div>
    </div>
@endsection

@section('content')
    <div class="section mt-2">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-striped" id="table_data">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">{{ __('No.') }}</th>
                            <th scope="col">{{ __('Aksi') }}</th>
                            <th scope="col">{{ __('Nama Permission') }}</th>
                            <th scope="col">{{ __('Grup Permission') }}</th>
                            <th scope="col">{{ __('Nama Menu') }}</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@include('layouts.includes.datatable')

@push('scripts')
    <script>
        let table_data;

        table_data = $('#table_data').DataTable({
            processing: true,
            autoWidth: false,
            responsive: true,
            serverSide: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
            },
            ajax: {
                url: '{{ route('admin.permission.data') }}',
            },
            columns: [{
                data: 'DT_RowIndex',
                searchable: false,
                sortable: false,
            }, {
                data: 'action',
                searchable: false,
                sortable: false,
            }, {
                data: 'name',
                searchable: true,
                sortable: true,
            }, {
                data: 'group_name',
                searchable: true,
                sortable: true,
            }, {
                data: 'menu_name',
                searchable: true,
                sortable: true,
            }],
            "aaSorting": [
                [3, 'asc'],
                [2, 'asc']
            ],
            columnDefs: [{
                targets: [0],
                className: 'dt-center'
            }],
        });
    </script>
@endpush
