@extends('admin.layouts.app')

@section('title', 'Edit Provinsi')

@section('content')       
  <div class="box">
      <div class="box-header with-border">
      </div>
      <div class="box-body">
      {!! Form::model($provinces, [
        'method'  => 'PUT',
        'route'   => ['provinsi.update', $provinces->id],
        'id'      => 'charity-form'
      ]) !!}

      @include('admin.provinsi.form')

      {!! Form::close() !!}
    </div>
  </div>
@endsection