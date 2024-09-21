@extends('layouts.app')


@push('style')
    <style>
        #employees-table_wrapper {
            overflow-x: auto;
        }


        #employees-table {
            overflow-x: auto; /* Enable horizontal scrolling */
            display: block; /* Ensure it's a block element for scrolling */
            white-space: nowrap; /* Prevent line breaks in the table */
            width: auto; /* Set a minimum width if necessary */
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Employee</div>
            <div class="card-body">
                <div class="table-responsive">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush

