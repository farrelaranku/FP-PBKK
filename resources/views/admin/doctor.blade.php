<div class="page-section">
    <div class="container">
      <h1 class="text-center     mb-5 wow fadeInUp">Doctor List</h1>
  

    @if($doctors->isNotEmpty())
    <div class="container-fluid page-body-wrapper">
    <div align="center" style="padding-top:10px;">
    <table class="table-bordered">
      <tr align="center">
        <th style="padding:10px">Name</th>
        <th style="padding:10px">Phone</th>
        <th style="padding:10px">Speciality</th>
        <th style="padding:10px">Room No</th>
        <th style="padding:10px">Image</th>
        <th style="padding:10px">Delete</th>
        <th style="padding:10px">Update</th>
      </tr>
    @foreach($doctors as $doctor)
      <tr align="center">
        <td>{{$doctor->name}}</td>
        <td>{{$doctor->phone}}</td>
        <td>{{$doctor->speciality}}</td>
        <td>{{$doctor->room}}</td>
        <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
        <td><a href="{{url('deletedoctor', $doctor->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete selected doctor?')">Delete</a></td>
        <td><a href="{{url('updatedoctor', $doctor->id)}}" class="btn btn-primary">Update</a></td>
      </tr>
    @endforeach
    </table>
    </div>
    </div>
@else
    <p>Tidak ada data dokter.</p>
@endif
         
        </div>
      </div>
    </div>
  </div>