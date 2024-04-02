@extends('layout.app')

@section('content')

<div class="container" style="margin-top: 65px">
    <h1 class="text-center">Students Management</h1>

<div class="row">
    <div class="col-md-5">
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div style="align:center; width: 100%;">
            {{-- validation failier --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $errors)
                            <li>{{$errors}}</li>
                         @endforeach
                    </ul>
                </div>
            @endif
                <input type="text" name="stid" id="disabledTextInput" class="form-control mt-5" placeholder="Enter ID">
                <input type="text" name="name" id="disabledTextInput" class="form-control mt-2" placeholder="Enter Name">
                <input type="text" name="image" id="disabledTextInput" class="form-control mt-2" placeholder="Enter Image">
                <input type="number" name="age" id="disabledTextInput" class="form-control mt-2" placeholder="Enter Age">
                <select class="form-control mt-2" name="status">
                    <option disabled selected>Enter Status</option>
                    <option value="Active">active</option>
                    <option value="Inactive">inactive</option>
                </select>
                <button type="submit" class="btn btn-primary mt-2" style="float: right">Add Student</button>
            </div>
        </form>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-5">

    </div>
</div>
    <br><br><br><br>

    <div class="mt-30">
        <table class="table mt-30">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">St ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Age</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($response as $key=>$st)
                    <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $st->stid }}</td>
                    <td>{{ $st->name }}</td>
                    <td>{{ $st->image }}</td>
                    <td>{{ $st->age }}</td>
                    <td>{{ $st->status }}</td>
                    <td>


                        <a href="{{ route('delete',$st->id) }}"><p class="btn btn-danger">Delete</p></a>
                        <a href="{{ route('edit', $st->id) }}"><p class="btn btn-success">Update</p></a>




                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>








