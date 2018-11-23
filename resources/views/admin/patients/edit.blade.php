@extends('admin.layouts.app')

@section('title', 'Patients')

@section('content')

    <!-- Main content -->
    <section class="content">

      <div class="row">
        
        {!! Form::model($patient, [
          'method'  => 'PUT',
          'route'   => ['patients.update', $patient->id],
          'id'      => 'patient-form'
        ]) !!}

        @include('admin.patients.form')

        {!! Form::close() !!}

      </div>

    </section>


@endsection