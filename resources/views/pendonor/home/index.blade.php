@extends('pendonor.layouts.app')

@section('content')
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Blank Box</h3>
  </div>
  <div class="box-body">
    {!! Form::model($pendonor, [
      'method'  => 'PUT',
      'route'   => ['pendonor.update'],
      'id'      => 'pendonor-form'
    ]) !!}

    @include('pendonor.home.form')

    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
@endsection