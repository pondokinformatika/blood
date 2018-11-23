@extends('admin.layouts.app')

@section('title', 'Patients')

@section('content')
<div class="box">
  <div class="box-header with-border">
  </div>
  <div class="box-body">
    {!! Form::model($patient, [
      'method'  => 'POST',
      'route'   => 'patients.store',
      'id'      => 'patient-form'
    ]) !!}

    @include('admin.patients.form')

    {!! Form::close() !!}
  </div>
</div>
@endsection