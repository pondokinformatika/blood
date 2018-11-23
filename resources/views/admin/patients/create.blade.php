@extends('admin.layouts.app')

@section('title', 'Patients')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Pasien
        <small>Halaman Daftar Pasien</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('patients.index')}}">Pasien</a></li>
        <li class="active"> Daftar Pasien</li>
      </ol>
    </section>

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