<table class="table table-hover">
  
  <tr>
    <th width="40">#</th>
    <th width="200">Nama Pasien</th>
    <th>Golongan Darah</th>
    <th>No Telepon</th>
    <th width="150">Action</th>
  </tr>

  <?php $no = 1; ?>
  @foreach($patients as $patient)
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $patient->name }}</td>
      <td>{{ $patient->blood_type_id }}</td>
      <td>{{ $patient->phone }}</td>
      <td>
        <form action="{{route('patients.destroy', $patient->id)}}" method="post">
          {{ csrf_field() }}
          {{ method_field("DELETE") }}
          <a href="{{route('patients.edit', $patient->id)}}" class="btn btn-xs btn-primary">
            <i class="fa fa-edit"></i> Edit
          </a>
          <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-xs btn-danger">
            <i class="fa fa-trash"></i> Hapus
          </button>
        </form>
      </td>
    </tr>
  @endforeach

</table>