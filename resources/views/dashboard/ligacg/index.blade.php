@extends('dashboard.layouts.main')

@section('container')
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Data</h1>

                         @if(session()->has('success'))
                            <div class="alert alert-success d-flex align-items-center col-lg-12" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                    {{ session('success') }}
                                </div>       
                            </div>
                        @endif()

                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <a href="/dashboard/ligacg/create" class="btn btn-primary"> <i class="fas fa-plus "></i> Add Data</a>
                            </div>
                        </div>

                        <div class="card mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All Data Table
                            </div>
                            <div class="card-body">
                              <table class="table">
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
                                            <a href="/dashboard/posts/id" class="badge bg-info"><i class="fas fa-eye"></i></a>
                                            <a href="/dashboard/ligacg/{{ $data->id }}/edit" class="badge bg-warning"><i class="fas fa-edit"></i></a>
                                            <form action="/dashboard/ligacg/{{ $data->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure want to delete this post?')">
                                                <i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                        </tr>
                                        @endforeach()
                                    </tbody>  
                              </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

@endsection()
                       
