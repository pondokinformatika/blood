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

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
            <a href="{{route('patients.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
        </div>
        <div class="box-body">
           @include('admin.patients.table')
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="pull-left">
            {{ $patients->links() }}
          </div>
          <div class="item-count pull-right text-muted small">
          total {{ $itemCount." ".str_plural('item', $itemCount) }}
          </div>
      </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@endsection