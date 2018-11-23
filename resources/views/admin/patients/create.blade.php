@extends('admin.layouts.app')

@section('title', 'Patients')

@section('content')

    <!-- Main content -->
    <section class="content">

      <div class="row">
        
        {!! Form::model($patient, [
          'method'  => 'POST',
          'route'   => 'patients.store',
          'id'      => 'patient-form'
        ]) !!}

        @include('admin.patients.form')

        {!! Form::close() !!}

      </div>

    </section>
    <!-- /.content -->
  </div>

@endsection