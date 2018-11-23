@extends('admin.layouts.app')

@section('title', 'Patients')

@section('content')
    {!! Form::model($patient, [
      'method'  => 'PUT',
      'route'   => ['patients.update', $patient->id],
      'id'      => 'patient-form'
    ]) !!}

    @include('admin.patients.form')

    {!! Form::close() !!}
@endsection