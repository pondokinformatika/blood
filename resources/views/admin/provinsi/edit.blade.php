@extends('admin.layouts.app')

@section('title', 'Edit Provinsi')

@section('content')

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
@endsection