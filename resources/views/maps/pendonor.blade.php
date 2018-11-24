<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home|Maps</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.4/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" crossorigin="" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.4/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.4/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.4/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.4/dist/css/skins/_all-skins.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    #map {
      height: 670px;
      width: 100%;
    }
    .nav {
        height: 50px;
        width: 100%;
        background: #c4c4c4;
    }
    .nav ul li {
        float: right;

    }
    .wrapper-header {
        width: 95%;
        margin: auto;
        background: #c4c4c4;
    }
    .glyphicon {
        font-size: 19px;
    }
    .font-login {
        font-size: 19px;
    }
  </style>
</head>
<body>
<!-- Site wrapper -->
<div class="wrapper">

  
      <div id="map" class="wrapper-header">
          
      </div>

</div>
<!-- jQuery 3 -->
<script src="{{ asset('AdminLTE-2.4.4/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('AdminLTE-2.4.4/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('AdminLTE-2.4.4/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('AdminLTE-2.4.4/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE-2.4.4/dist/js/adminlte.min.js') }}"></script>
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js" crossorigin=""></script>
<script src="http://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminLTE-2.4.4/dist/js/demo.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })

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

    {{--
    @foreach($donors as $donor)

      L.marker([`{{ $donor->latitude }}`, `{{ $donor->longitude }}`]).addTo(map).bindPopup('<b>{{ $donor->name }}</b><br><center>Golongan Darah <b>{{$donor->blood_type_id}}</b><button class="btn btn-primary">action</button></center>').openPopup();

    @endforeach
    --}}
</script>
</body>
</html>