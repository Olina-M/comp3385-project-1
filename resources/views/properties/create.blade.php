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

        <form action="{{ url('/properties') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1>Add New Property</h1>
    <div class="form-group">
        <label for="propertyTitle" class="required-label">Property Title</label>
        <input type="text" class="form-control" id="propertyTitle" name="title" required>
    </div>
    <div class="form-group">
        <label for="description" class="required-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>
    <div class="row mb-3">
        <label for="noOfRooms" class="col-sm-2 col-form-label">No. of Rooms</label>
        <div class="col-sm-4">
            <input type="number" class="form-control" id="noOfRooms" name="bedrooms" min="0" required>
        </div>
        <label for="noOfBathrooms" class="col-sm-2 col-form-label">No. of Bathrooms</label>
        <div class="col-sm-4">
            <input type="number" class="form-control" id="noOfBathrooms" name="bathrooms" min="0" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-4">
            <input type="number" class="form-control" id="price" name="price" min="0" required>
        </div>
        <label for="propertyType" class="col-sm-2 col-form-label">Property Type</label>
        <div class="col-sm-4">
            <select id="propertyType" class="form-select" name="type" required>
                <option value="House">House</option>
                <option value="Apartment">Apartment</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="location" class="required-label">Location</label>
        <input type="text" class="form-control" id="location" name="location" required>
    </div>
    <div class="form-group">
        <label for="photo" class="required-label">Photo</label>
        <input type="file" class="form-control" id="photo" name="photo" required>
        <small style="color: #616467">Only image files (e.g. jpg, png) are allowed, and files must be less than 2MB.</small>
    </div>
    <button type="submit" class="btn btn-primary">Add Property</button>
</form>


@endsection