@extends('admin.layouts.app')

@section('title', 'Tambah Provinsi')

@section('content')
  <section class="content">
    <div class="row">

      {!! Form::model($provinces, [
        'method'  => 'POST',
        'route'   => 'provinsi.store',
      ]) !!}

      @include('admin.provinsi.form')

      {!! Form::close() !!}

    </div>

  </section>
@endsection