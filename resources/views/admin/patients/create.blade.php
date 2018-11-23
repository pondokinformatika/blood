@extends('admin.layouts.app')

@section('title', 'Patients')

@section('content')
    {!! Form::model($patient, [
      'method'  => 'POST',
      'route'   => 'patients.store',
      'id'      => 'patient-form'
    ]) !!}

    @include('admin.patients.form')

    {!! Form::close() !!}
@endsection