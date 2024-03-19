@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Properties</h1>
        <a href="{{ asset('properties/create') }}">
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($properties as $property)
            <div class="col">
                <div class="card text-center h-100">
                    <div class="h-60 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('storage/images/' . $property->photo) }}" class="card-img-top p-2 img-fluid" alt="Property Image" style="width: 200px; height: 200px; object-fit: contain">
                    </div>
                    <div class="card-body" style="background-color: #f6f7f8; padding: 10px;">
                        <h3 class="card-title" style="color: #0d6efd">{{ $property->title }}</h3>
                        <p class="card-text my-0"><a href="{{ $property->location }}">{{ $property->location }}</a></p>
                        <p class="card-text my-0">{{ $property->price }}</p>
                    </div>
                    <div class="card-footer d-grid" style="background-color: #03fcdf">
                        <a href="{{ route('properties.show', ['property_id' => $property->id]) }}" style="text-decoration: none; color: white"> View Property</a>
                    </div>
                </div>
            </div>`
        @endforeach
    </div>
@endsection