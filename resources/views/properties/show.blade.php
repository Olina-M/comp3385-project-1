@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #f5f5f5; /* Light gray background */
        }
    </style>

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/images/' . $property->photo) }}" class="card-img-top img-fluid" alt="Property Image" style="object-fit: cover; width: 100%; height: 100%">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $property->title }}</h5>
                    <div class="property-details">
                        <p class="card-text" style="display: inline; background-color: #0096FF; color: white; padding: 5px 10px; border-radius: 20px; display: inline-block;"> $ {{ $property->price }}</p>
                        <p class="card-text" style="display: inline; margin-left: 10px; background-color: #FFCA4B; color: white; padding: 5px 10px; border-radius: 20px; display: inline-block;">{{ $property->type }}</p>
                    </div>
                    <p class="card-text">{{ $property->description }}</p>   
                    <div class="property-details">
                        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                        <span class="material-icons" style="vertical-align: middle;">bed</span>
                        <p class="card-text" style="display: inline; vertical-align: middle;">{{ $property->bedrooms }} Bedroom</p> 
                        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
                        <span class="material-symbols-outlined" style="vertical-align: middle;">bathroom</span>
                        <p class="card-text" style="display: inline; margin: 10px; vertical-align: middle;">{{ $property->bathrooms }} Bathroom</p> 
                    </div>
                    <p class="card-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16" style="vertical-align: middle;">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>
                        <a href="{{ $property->location }}" style="text-decoration: none; vertical-align: middle; color: black">{{ $property->location }}</a>
                    </p>
                    <button type="submit" style="background-color: #32a897" class="btn btn-primary">Email Realtor</button>
                </div>
            </div>
        </div>
    </div>
@endsection


