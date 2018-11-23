@extends('admin.layouts.app')

@section('title', 'Tambah Provinsi')

@section('content')
      {!! Form::model($provinces, [
        'method'  => 'POST',
        'route'   => 'provinsi.store',
      ]) !!}

      @include('admin.provinsi.form')

      {!! Form::close() !!}
@endsection