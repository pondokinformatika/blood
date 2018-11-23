@extends('admin.layouts.app')

@section('title', 'Tambah Provinsi')

@section('content')      
  <div class="box">
      <div class="box-header with-border">
      </div>
      <div class="box-body">
      {!! Form::model($provinces, [
        'method'  => 'POST',
        'route'   => 'provinsi.store',
      ]) !!}

      @include('admin.provinsi.form')

      {!! Form::close() !!}
    </div>
  </div>
@endsection