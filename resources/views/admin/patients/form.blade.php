<div class="col-md-9">
  <!-- Default box -->

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
        {!! Form::select('province_id', $result, null,  ['class' => 'form-control select-provinsi', 'id' => 'province_id', 'minlength' => 2, 'maxlength' => 2], $attlatlong) !!}

        @if ($errors->has('province_id'))
          <span class="help-block">{{ $errors->first('province_id') }}</span>
        @endif
      </div>

      <div class="box-header with-border">
          <div id="map">
            
          </div>

          <p><strong>Silahkan Pin Lokasi Anda<span class="text-primary"> *<span></strong></p>
      </div>

      <div class="row">
        <div class="col-xs-6">
          <div class="form-group {{ $errors->has('latitude') ? 'has-error' : '' }}">
            {!! Form::text('latitude', null,  ['class' => 'form-control', 'id' => 'latitude', 'placeholder' => 'Latitude']) !!}

            @if ($errors->has('latitude'))
              <span class="help-block">{{ $errors->first('latitude') }}</span>
            @endif
          </div>
        </div>

        <div class="col-xs-6">
          <div class="form-group {{ $errors->has('longitude') ? 'has-error' : '' }}">
            {!! Form::text('longitude', null,  ['class' => 'form-control', 'id' => 'longitude', 'placeholder' => 'Longitude']) !!}

            @if ($errors->has('longitude'))
              <span class="help-block">{{ $errors->first('longitude') }}</span>
            @endif
          </div>
        </div>
      </div>

     <div class="form-group {{ $errors->has('blood_type_id') ? 'has-error' : '' }}">
        {!! Form::label('Golongan Darah') !!}
        <span class="text-primary"> *<span>
        {!! Form::select('blood_type_id', $blood, null,  ['class' => 'form-control', 'id' => 'blood_type_id']) !!}

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

  <!-- /.box -->
</div>

@section('script')
  <script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })


  var map = L.map('map').setView([-1.502, 116.822], 5);

       L.tileLayer('http://{s}.tiles.wmflabs.org/bw-mapnik/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
      }).addTo(map);

      var marker;

      map.on('click', function(e) {
        var latitude = e.latlng.lat.toFixed(7);
        var longitude =e.latlng.lng.toFixed(7);

        if (marker) {
           map.removeLayer(marker);
        }

        marker = L.marker([latitude, longitude]).addTo(map)
           .bindPopup("<b>Nama Kota</b> <br> Alamat Lengkap <br>"
                       + e.latlng.lat.toFixed(7) + ", "
                       + e.latlng.lng.toFixed(7))
           .openPopup();

      $('#latitude').val(latitude);
      $('#longitude').val(longitude);

      });
$('select').on('change', function () {
  var lat = $(this).find(':selected').data('latitude');
  var long = $(this).find(':selected').data('longitude');
  map.setView([lat, long], 9);
});
</script>

@endsection
