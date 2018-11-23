@extends('admin.layouts.app')

@section('style')


<style type="text/css">
  #mapid {
    height: 500px;
    width: 100%;
  }
</style>
@endsection

@section('content')
<div class="box">
  <div class="box-header with-border">
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Pasien Baru</a>

  </div>
  <div class="box-header with-border">
      
      <div id="mapid">

      </div>
      
  </div>

  <!-- /.box-body -->

  <!-- /.box-footer-->
</div>
@endsection

@section('script')
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })


  var map = L.map('mapid').setView([-0.446406, 117.547720], 5);

       L.tileLayer('http://{s}.tiles.wmflabs.org/bw-mapnik/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
      }).addTo(map);


      L.marker([-7.797635, 110.370209]).addTo(map)
       .bindPopup('Lokasi Pasien <br><center><i class="fa fa-user"></i></center>')
       .openPopup();
</script>
@endsection