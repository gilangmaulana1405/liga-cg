@extends('dashboard.layouts.main')

@section('container')

 <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

 <h2 class="mt-3">All Data</h2>

 @if(session()->has('success'))
 <div class="alert alert-success d-flex align-items-center col-lg-8" role="alert">
   <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
         {{ session('success') }}
      </div>       
 </div>
 @endif()

      <div class="table-responsive">
      
      <a href="/dashboard/ligacg/create" class="btn btn-success mt-3"><span data-feather="plus-circle"></span> Create New Data</a>

        <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Employee</th>
              <th scope="col">Circle Group</th>
              <th scope="col">Jenis Taging</th>
              <th scope="col">Point</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data_ligacg as $data)
            <tr>
              <td>{{ $loop->iteration}}</td>
              <td>{{ $data->employee }}</td>
              <td>{{ $data->circle_group }}</td>
              <td> {{ $data->jenis_taging }} </td>
              <td> {{ $data->point }} </td>
              <td>
                  <!-- <a href="/dashboard/posts/id" class="badge bg-info"><span data-feather="eye"></span></a> -->
                  <a href="/dashboard/ligacg/{{ $data->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/ligacg/{{ $data->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure want to delete this post?')"><span data-feather="trash"></span></button>
                  </form>
              </td>
            </tr>
             @endforeach()
          </tbody>
        </table>
      </div>
@endsection()