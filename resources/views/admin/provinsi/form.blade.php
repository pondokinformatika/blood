<div class="col-md-9">
  <!-- Default box -->
  <div class="box">

    <div class="box-header with-border">
      <h3 class="box-title">{{ $provinces->exists ? 'Edit' : 'Tambah' }} Tagihan</h3>
      <span class="text-muted small pull-right">kolom yang memiliki tanda ( * ) wajib diisi!</span>
    </div>

    <!-- box-body -->
    <div class="box-body">
      <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::label('Nama Provinsi') !!}
        <span class="text-primary"> *<span>
        {!! Form::text('name', null,  ['class' => 'form-control', 'id' => 'name']) !!}

        @if ($errors->has('name'))
          <span class="help-block">{{ $errors->first('name') }}</span>
        @endif
      </div>


      <div class="form-group {{ $errors->has('latitude') ? 'has-error' : '' }}">
        {!! Form::label('Latitude') !!}
        <span class="text-primary"> *<span>
        {!! Form::number('latitude', null,  ['class' => 'form-control', 'id' => 'latitude']) !!}

        @if ($errors->has('latitude'))
          <span class="help-block">{{ $errors->first('latitude') }}</span>
        @endif
      </div>

      <div class="form-group {{ $errors->has('longitude') ? 'has-error' : '' }}">
        {!! Form::label('Longitude') !!}
        <span class="text-primary"> *<span>
        {!! Form::number('longitude', null,  ['class' => 'form-control', 'id' => 'longitude']) !!}

        @if ($errors->has('longitude'))
          <span class="help-block">{{ $errors->first('longitude') }}</span>
        @endif
      </div>

      
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary" id="save-btn">{{ $provinces->exists ? 'Perbarui' : 'Simpan' }}</button>
      <a href="{{ route('provinsi.index') }}" class="btn btn-default">Batal</a>
    </div>

  </div>
  <!-- /.box -->
</div>
