<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home|Maps</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" crossorigin="" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/pricing/pricing.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
      #map {
        height: 600px;
        width: 100%;
      }
  </style>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">deBlood</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="{{url('login')}}">Pendonor</a>
    <a class="p-2 text-dark" href="{{url('signinPendonor')}}"">Pasien</a>
    <!-- <a class="p-2 text-dark" href="#">Support</a>
    <a class="p-2 text-dark" href="#">Pricing</a> -->
  </nav>
  <!-- <a class="btn btn-outline-primary" href="#">Sign up</a> -->
</div>

<div class="container-fluid">

  <div id="map" class="wrapper-header">
            
  </div>
</div>
<!-- Site wrapper -->
<div class="wrapper">
  
      

</div>
<!-- jQuery 3 -->
<script src="{{ asset('AdminLTE-2.4.4/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('AdminLTE-2.4.4/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js" crossorigin=""></script>
<script src="http://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
<script type="text/javascript">
var place = [
@foreach($donors as $i => $row)
  @if(($i+1) == $total)
    [{{$row->latitude}}, {{$row->longitude}}, '{{isset($row->blood_type->name)?$row->blood_type->name:"-"}}']
  @else
    [{{$row->latitude}}, {{$row->longitude}}, '{{isset($row->blood_type->name)?$row->blood_type->name:"-"}}'],
  @endif
@endforeach
];

  var map = L.map('map').setView([-1.501142,120.11035], 5);

     L.tileLayer('http://{s}.tiles.wmflabs.org/bw-mapnik/{z}/{x}/{y}.png', {
      maxZoom: 18,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

for (var i = 0; i < place.length; i++) {
  marker = new L.marker([place[i][0], place[i][1]])
          .bindPopup('Golongan Darah : '+place[i][2])
          .addTo(map);
}
    //  map.on('click', function(e) {
    //   var latitude = e.latlng.lat;
    //   var longitude =e.latlng.lng;
    // });

</script>
</body>
</html>