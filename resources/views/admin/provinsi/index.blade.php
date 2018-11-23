@extends('admin.layouts.app')

@section('title', 'Provinsi')

@section('content')
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
      </div>
    </div>
@endsection