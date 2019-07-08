@extends('web::layouts.grids.4-4-4')

@section('title', Dashboard'))
@section('page_header', 'Dashboard''))

@section('left')
@stop

@section('center')
@stop

@push('head')
  <link rel="stylesheet" href="{{ asset('web/css/dashboard.css') }}" />
@endpush

@push('javascript')
  <script type="text/javascript" src="{{ asset('web/js/home.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(() => {
      console.log('SAS Dashboard home loaded.');
    });
  </script>
@endpush
