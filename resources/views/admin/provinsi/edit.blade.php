@extends('admin.layouts.app')

@section('title', 'Edit Provinsi')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Provinsi
      <small>Mendata Provinsi</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="{{ route('provinsi.index') }}">Provinsi</a></li>
      <li class="active">Edit Provinsi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">

      {!! Form::model($provinces, [
        'method'  => 'PUT',
        'route'   => ['provinsi.update', $provinces->id],
        'id'      => 'charity-form'
      ]) !!}

      @include('admin.provinsi.form')

      {!! Form::close() !!}

    </div>

  </section>
  <!-- /.content -->
</div>

@endsection