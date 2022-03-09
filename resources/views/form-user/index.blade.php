@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">

        <!-- alert flash success -->
        @if(session()->has('success'))
       <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                {{ session('success') }}
            </div>
        </div>
        <!-- alert flash failed -->
        @elseif(session()->has('failed'))
         <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
               {{session('failed')}}
            </div>
        </div>
        @else
        @endif  

        <main class="form-signin">
                <h1 class="h3 mb-4 fw-normal text-center">Form Liga CG</h1>
             <form action="/form-user" method="post">
         @csrf
        <div class="mb-3">
            <label for="employee" class="form-label">Employee</label>
            <input type="text" class="form-control @error('employee') is-invalid @enderror" id="employee" name="employee" autofocus value="{{ old('employee') }}">
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
            <input type="text" class="form-control @error('point') is-invalid @enderror" id="point" name="point" autofocus value="{{ old('point') }}">
            @error('point')
             <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="d-grid col-6 mx-auto">
            <button class="btn btn-md w-70 btn-success" type="submit">Submit</button>
        </div>

    </form>
            <small class="d-block mt-3 text-center">Not registered? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>

@endsection