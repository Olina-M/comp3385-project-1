@extends ('layouts.app')

@section('content')
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <style>
            .form-group {
                margin-bottom: 15px; /* Adjust the value as needed */
            }
            
            h1 {
                font-weight: bold;
            }
            
            body {
                background-color: #f5f5f5; /* Light gray background */
            }

            label {
                font-weight: bold;
            }

        </style>
        <form action="{{ url('/properties') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1>Add New Property</h1>
    <div class="container mt-5" >  
        <div class="p-4 mb-5 bg-white rounded" style="width: fit-content;">  <form action="{{ url('/properties') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="propertyTitle" class="required-label">Property Title</label>
        <input type="text" class="form-control" id="propertyTitle" name="title" required>
      </div>
      <div class="form-group">
        <label for="description" class="required-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
      </div>
      <div class="row mb-3">
        <div class="col-sm-6">
          <label for="noOfRooms" class="form-label">No. of Rooms</label>
          <input type="number" class="form-control" id="noOfRooms" name="bedrooms" min="0" placeholder="3" required >
        </div>
        <div class="col-sm-6">
          <label for="noOfBathrooms" class="form-label">No. of Bathrooms</label>
          <input type="number" class="form-control" id="noOfBathrooms" name="bathrooms" min="0" placeholder="2" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-6">
          <label for="price" class="form-label">Price</label>
          <input type="number" class="form-control" id="price" name="price" min="0" placeholder="15,000,000" required>
        </div>
        <div class="col-sm-6">
          <label for="propertyType" class="form-label">Property Type</label>
          <select id="propertyType" class="form-select" name="type" required>
            <option value="House">House</option>
            <option value="Apartment">Apartment</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="location" class="required-label">Location</label>
        <input type="text" class="form-control" id="location" name="location" placeholder="10 Waterloo Rd"required>
      </div>
      <div class="form-group">
        <label for="photo" class="required-label">Photo</label>
        <input type="file" class="form-control" id="photo" name="photo"  required>
      </div>
      <button type="submit" class="btn btn-primary">Add Property</button>
    </form>
  </div>
</div>
@endsection