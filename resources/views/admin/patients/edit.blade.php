@extends('admin.layouts.app')

@section('title', 'Patients')

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">{{ $patient->exists ? 'Edit' : 'Tambah' }} Pasien</h3>
      <span class="text-muted small pull-right">kolom yang memiliki tanda ( * ) wajib diisi!</span>
    </div>
    <div class="box-body">
    {!! Form::model($patient, [
      'method'  => 'PUT',
      'route'   => ['patients.update', $patient->id],
      'id'      => 'patient-form'
    ]) !!}

    @include('admin.patients.form')

    {!! Form::close() !!}
    </div>
    <!-- /.box-body -->
        <!-- /.box-footer-->
</div>
@endsection