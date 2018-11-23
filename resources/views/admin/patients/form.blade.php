<div class="col-md-9">
  <!-- Default box -->
  <div class="box">

    <div class="box-header with-border">
      <h3 class="box-title">{{ $patient->exists ? 'Edit' : 'Tambah' }} Pasien</h3>
      <span class="text-muted small pull-right">kolom yang memiliki tanda ( * ) wajib diisi!</span>
    </div>

    <!-- box-body -->
    <div class="box-body">

      <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::label('Nama') !!}
        <span class="text-primary"> *<span>
        {!! Form::text('name', null,  ['class' => 'form-control', 'id' => 'name']) !!}

        @if ($errors->has('name'))
          <span class="help-block">{{ $errors->first('name') }}</span>
        @endif
      </div>

      <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
        {!! Form::label('Telephone') !!}
        <span class="text-primary"> *<span>
        {!! Form::number('phone', null,  ['class' => 'form-control', 'id' => 'phone']) !!}

        @if ($errors->has('phone'))
          <span class="help-block">{{ $errors->first('phone') }}</span>
        @endif
      </div>

      <div class="form-group {{ $errors->has('province_id') ? 'has-error' : '' }}">
        {!! Form::label('ID Provinsi') !!}
        <span class="text-primary"> *<span>
        {!! Form::number('province_id', null,  ['class' => 'form-control', 'id' => 'province_id']) !!}

        @if ($errors->has('province_id'))
          <span class="help-block">{{ $errors->first('province_id') }}</span>
        @endif
      </div>

      <div class="form-group {{ $errors->has('latitude') ? 'has-error' : '' }}">
        {!! Form::label('Latitude') !!}
        <span class="text-primary"> *<span>
        {!! Form::text('latitude', null,  ['class' => 'form-control', 'id' => 'latitude']) !!}

        @if ($errors->has('latitude'))
          <span class="help-block">{{ $errors->first('latitude') }}</span>
        @endif
      </div>

      <div class="form-group {{ $errors->has('longitude') ? 'has-error' : '' }}">
        {!! Form::label('Longitude') !!}
        <span class="text-primary"> *<span>
        {!! Form::text('longitude', null,  ['class' => 'form-control', 'id' => 'longitude']) !!}

        @if ($errors->has('longitude'))
          <span class="help-block">{{ $errors->first('longitude') }}</span>
        @endif
      </div>

      <div class="form-group {{ $errors->has('blood_type_id') ? 'has-error' : '' }}">
        {!! Form::label('Golongan Darah') !!}
        <span class="text-primary"> *<span>
        {!! Form::number('blood_type_id', null,  ['class' => 'form-control', 'id' => 'blood_type_id']) !!}

        @if ($errors->has('blood_type_id'))
          <span class="help-block">{{ $errors->first('blood_type_id') }}</span>
        @endif
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary" id="save-btn">{{ $patient->exists ? 'Perbarui' : 'Simpan' }}</button>
      <a href="{{ route('patients.index') }}" class="btn btn-default">Batal</a>
    </div>

  </div>
  <!-- /.box -->
</div>
