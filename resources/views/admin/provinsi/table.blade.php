<table class="table table-hover">
  
  <tr>
    <th width="40">#</th>
    <th>Nama</th>
    <th>Latitude</th>
    <th width="200">Longitude</th>
    <th>Action</th>
  </tr>

  <?php $no = 1; ?>
  @foreach($provinces as $province)
    <tr>
      <td> {{$no++}} </td>
      <td> {{$province->name}} </td>
      <td> {{$province->latitude}} </td>
      <td> {{$province->longitude}} </td>
      <td>
        <form action=" {{ route('provinsi.destroy', $province->id) }} " method="post">
          {{ csrf_field() }}
          {{ method_field("DELETE") }}
          <a href="{{route('provinsi.edit', $province->id)}}" class="btn btn-xs btn-primary">
            <i class="fa fa-edit"></i> Edit
          </a>
          <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-xs btn-danger">
            <i class="fa fa-trash"></i> Hapus
          </button>
        </form>
     
    </tr>
  @endforeach

</table>