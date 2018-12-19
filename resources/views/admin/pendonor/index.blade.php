@extends('admin.layouts.app')

@section('title', 'Pendonor')

@section('content')

      <div class="box">
        <div class="box-body">
           @include('admin.pendonor.table')
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="pull-left">
            {{ $pendonors->links() }}
          </div>
          <div class="item-count pull-right text-muted small">
          total {{ $itemCount." ".str_plural('item', $itemCount) }}
          </div>
      </div>
    </div>
        <!-- /.box-footer-->

@endsection