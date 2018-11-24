<div class="form-group">
  {!! Form::label('Nama') !!}
  <span class="text-primary"> *<span>
  {!! Form::text('name', null,  ['class' => 'form-control', 'id' => 'name']) !!}

  @if ($errors->has('name'))
    <span class="help-block">{{ $errors->first('name') }}</span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('Email') !!}
  <span class="text-primary"> *<span>
  {!! Form::text('email', null,  ['class' => 'form-control', 'id' => 'email']) !!}

  @if ($errors->has('email'))
    <span class="help-block">{{ $errors->first('email') }}</span>
  @endif
</div>


<div class="form-group">
  {!! Form::label('Telephone') !!}
  <span class="text-primary"> *<span>
  {!! Form::number('phone', null,  ['class' => 'form-control', 'id' => 'phone']) !!}

  @if ($errors->has('phone'))
    <span class="help-block">{{ $errors->first('phone') }}</span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('ID Provinsi') !!}
  <span class="text-primary"> *<span>
  {!! Form::select('province_id', $result, null,  ['class' => 'form-control', 'id' => 'province_id', 'minlength' => 0, 'maxlength' => 0]) !!}

  @if ($errors->has('province_id'))
    <span class="help-block">{{ $errors->first('province_id') }}</span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('Latitude') !!}
  <span class="text-primary"> *<span>
  {!! Form::text('latitude', null,  ['class' => 'form-control', 'id' => 'latitude']) !!}

  @if ($errors->has('latitude'))
    <span class="help-block">{{ $errors->first('latitude') }}</span>
  @endif
</div>

<div class="form-group">
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
  {!! Form::select('blood_type_id', $blood, null,  ['class' => 'form-control', 'id' => 'blood_type_id']) !!}

  @if ($errors->has('blood_type_id'))
    <span class="help-block">{{ $errors->first('blood_type_id') }}</span>
  @endif
</div>