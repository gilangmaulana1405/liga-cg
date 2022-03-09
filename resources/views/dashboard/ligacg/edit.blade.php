@extends('dashboard.layouts.main')

@section('container')

 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
 </div>

<div class="col-lg-8">
    <!-- diarahkan ke store method di controller langsung tanpa ubah route di web.php -->
     <form action="/dashboard/ligacg/{{ $ligacg->id }}" method="post">
         @method('put')
         @csrf
        <div class="mb-3">
            <label for="employee" class="form-label">Employee</label>
            <input type="text" class="form-control @error('employee') is-invalid @enderror" id="employee" name="employee" autofocus value="{{ old('employee', $ligacg->employee) }}">
            @error('employee')
             <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

       <div class="mb-3">
            <label for="cicrle_group" class="form-label">Circle Group</label>
            <select class="form-select" name="circle_group" id="circle_group" aria-label="Default select example">
                <option>Circle Group A</option>
                <option>Circle Group B</option>
                <option>Circle Group C</option>
                <option>Circle Group D</option>
                <option>Circle Group E</option>
                <option>Circle Group F</option>
            </select>
        </div>

       <div class="mb-3">
            <label for="jenis_taging" class="form-label">Jenis Taging</label>
            <select class="form-select" name="jenis_taging" id="jenis_taging" aria-label="Default select example">
                <option>Taging Merah</option>
                <option>Taging Hijau</option>
                <option>Taging Kuning</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="point" class="form-label">Point</label>
            <input type="text" class="form-control @error('point') is-invalid @enderror" id="point" name="point" autofocus value="{{ old('point', $ligacg->point) }}">
            @error('point')
             <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update Data</button>
    </form>
</div>

@endsection()

