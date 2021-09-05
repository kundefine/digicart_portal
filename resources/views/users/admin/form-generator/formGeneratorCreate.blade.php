@extends('layout.admin.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
@endpush

@section('title', 'Form Generator - Create Form Generator')

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Form Generator</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Form Generator</li>
        </ol>
    </nav>

    <div id="formGenerator"></div>



@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-show-password/bootstrap-show-password.min.js') }}"></script>
    <script>
        window.formGeneratorStoreUrl = "{{route('formGeneratorStore')}}";
    </script>
    <script src="{{ asset('js/react/form_generator.js') }}"></script>
@endpush