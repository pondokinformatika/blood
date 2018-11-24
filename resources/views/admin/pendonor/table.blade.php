<table class="table table-hover">
  
  <tr>
    <th width="40">#</th>
    <th width="200">Nama Pendonor</th>
    <th>Golongan Darah</th>
    <th>Provinsi</th>
    <th>No Telepon</th>
    <th width="150">Action</th>
  </tr>

  <?php $no = 1; ?>
  @foreach($pendonors as $pendonor)
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $pendonor->name }}</td>
      <td>{{ $pendonor->blood_type->name }}</td>
      <td>{{ $pendonor->provinsi->name }}</td>
      <td>{{ $pendonor->phone }}</td>
      <td>
        <form action="{{route('pendonor.destroy', $pendonor->id)}}" method="post">
          {{ csrf_field() }}
          {{ method_field("DELETE") }}
          <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-xs btn-danger">
            <i class="fa fa-trash"></i> Hapus
          </button>
        </form>
      </td>
    </tr>
  @endforeach

</table>