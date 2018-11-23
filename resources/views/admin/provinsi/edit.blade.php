@extends('admin.layouts.app')

@section('title', 'Edit Provinsi')

@section('content') 
      {!! Form::model($provinces, [
        'method'  => 'PUT',
        'route'   => ['provinsi.update', $provinces->id],
        'id'      => 'charity-form'
      ]) !!}

      @include('admin.provinsi.form')

      {!! Form::close() !!}
@endsection