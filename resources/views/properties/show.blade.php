@extends('layouts.app')

@section('content')
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('storage/images/' . $property->photo) }}" class="card-img-top p-2 img-fluid" alt="Property Image" style="width: 200px; height: 200px; object-fit: contain">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">{{ $property->title }}</h5>
            <p class="card-text">Location: {{ $property->location }}</p>
            <p class="card-text">Price: ${{ $property->price }}</p> 
        </div>
        </div>
    </div>
    </div>
@endsection
