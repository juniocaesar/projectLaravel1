@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Daftar Mesin</h1>
    <hr>
@stop

@section('content')
    {{-- Table --}}

<div class="table-responsive">

<table id="" style="width:100%">

    {{-- Table head --}}
    <thead>
        <tr>
        </tr>
    </thead>

    {{-- Table body --}}
    <tbody></tbody>
        <tfoot @isset($footerTheme) class="thead-{{ $footerTheme }}" @endisset>
            <tr>
            </tr>
        </tfoot>

</table>

</div>

{{-- Add plugin initialization and configuration code --}}

@push('js')
<script>

    $(() => {
        $('#{{ $id }}').DataTable( @json($config) );
    })

</script>
@endpush

{{-- Add CSS styling --}}

@isset($beautify)
    @push('css')
    <style type="text/css">
        #{{ $id }} tr td,  #{{ $id }} tr th {
            vertical-align: middle;
            text-align: center;
        }
    </style>
    @endpush
@endisset
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop