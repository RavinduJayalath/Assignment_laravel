@extends('layout.app')
@section('content')

<div class="container" style="margin-top: 60px; width: 40%;">
    <h2 class="text-center">Edit {{ $response->name }}</h2>
    <div class="row">
        <div class="col-md-60">
            <form action="{{ route('update',$response->id) }}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="stid" class="col-form-label">ID:</label>
                  <input type="text" value="{{ $response->stid }}" class="form-control" id="stid" name="stid" readonly>
                </div>
                <div class="mb-3">
                    <label for="name" class="col-form-label">Name:</label>
                    <input type="text" value="{{ $response->name }}" class="form-control" id="name" name="name">
                  </div>
                  <div class="mb-3">
                    <label for="image" class="col-form-label">Image:</label>
                    <input type="text" value="{{ $response->image }}" class="form-control" id="image" name="image">
                  </div>
                  <div class="mb-3">
                    <label for="age" class="col-form-label">Age</label>
                    <input type="number" value="{{ $response->age }}" class="form-control" id="age" name="age">
                  </div>
                  <div>
                    <label for="status" class="col-form-label">Status:</label>
                    <select class="form-control mt-2" name="status">
                        <option disabled>Select Status</option>
                        <option value="Active" {{ $response->status == "Active" ? 'selected' : '' }}>Active</option>
                        <option value="Inactive" {{ $response->status == "Inactive" ? 'selected' : '' }}>Inactive</option>
                    </select>

                </div>
                <div style="float: right; margin-top: 20px;">
                    <a href="{{ route('cancel') }}"><p class="btn btn-dangeer">Cancel</p></a>
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>

</div>






@endsection
