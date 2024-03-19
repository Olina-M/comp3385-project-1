<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function create()
    {
        return view('properties.create');
    }

    public function store(Request $request)
    {
        // Validate form data, including file upload validation
        $request->validate([
            'title' => 'required',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'location' => 'required',
            'price' => 'required|numeric', 
            'type' => 'required|in:House,Apartment', 
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        // Handle file upload
        $photoPath = $request->file('photo');
        $photoPath->storeAs('images', $photoPath->getClientOriginalName(), 'public');

        // Save client information to the database
        $property = new Property;
        $property->title = $request->title;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->location = $request->location;
        $property->price = $request->price;
        $property->type = $request->type;
        $property->description = $request->description;
        $property->photo = $photoPath->getClientOriginalName(); 
        $property->save();

        return redirect('/properties')->with('success', 'Property added successfully!');
    }

    public function show($property_id)
    {
        $property = Property::findOrFail($property_id);
    
        return view('properties.show', ['property' => $property]);
    }
    
}