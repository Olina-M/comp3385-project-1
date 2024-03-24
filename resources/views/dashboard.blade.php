@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Properties</h1>
    </div>

    <style>
        body {
            background-color: #f5f5f5; /* Light gray background */
        }
        .card-img-top {
            width: 100%;
            height: 200px; /* Set the desired height of the card */
            object-fit: cover; /* Make the image cover the entire container */
        }
    </style>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($properties as $property)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('storage/images/' . $property->photo) }}" class="card-img-top" alt="Property Image">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ $property->title }}" style="text-decoration: none; color: black;">{{ $property->title }}</a></h5>
                        <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16" style="color: #D3D3D3;">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            <a href="{{ $property->location }}" style="text-decoration: none; color: #D3D3D3;">{{ $property->location }}</a>
                        </p>
                        <p class="card-text" style="background-color: #0096FF; color: white; padding: 5px 10px; border-radius: 20px; display: inline-block;">$ {{ $property->price }}</p>
                    </div>
                    <div class="card-footer" style="background-color: #32a897; text-align: center;">
                        <a href="{{ route('properties.show', ['property_id' => $property->id]) }}" style="text-decoration: none; color: white;">View Property</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
