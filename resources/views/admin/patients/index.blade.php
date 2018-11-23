@extends('admin.layouts.app')

@section('title', 'Patients')

@section('content')

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
    </div>
        <!-- /.box-footer-->

@endsection