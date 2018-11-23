@extends('admin.layouts.app')

@section('title', 'Provinsi')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Provinsi
      <small>Mendata riwayat Provinsi</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="#">Provinsi</a></li>
      <li class="active">Daftar Provinsi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box">      
      <div class="box-header with-border">
        <a href="{{route('provinsi.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
      </div>
      <div class="box-body table-responsive">

        @include('admin.provinsi.table')
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="pull-right text-muted small">
          {{ $provinces->links() }}
        </div>
        <div class="pull-left text-muted small">
          total {{ $itemCount." ".str_plural('item', $itemCount) }} 
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>

@endsection