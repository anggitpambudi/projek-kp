@extends('sb.layout')

@section('judul')
<div class="container">
    Edit
</div>
@endsection

@section('content')
    <div class="container">
        <form action="/dashboard/{{$member->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="title" class="col-sm-1 col-form-label">Name</label>
                <div class="col-sm-11">
                <input type="text" class="form-control" name="name" value="{{$member->name}}" id="title" placeholder="Input Name">
                </div>
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <div class="form-group row">
                <label for="title" class="col-sm-1 col-form-label">Job</label>
                <div class="col-sm-11">
                <input type="text" class="form-control" name="job" value="{{$member->job}}" id="title" placeholder="Input Job">
                </div>
                @error('job')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <div class="form-group row">
                <label for="title" class="col-sm-1 col-form-label">Office</label>
                <div class="col-sm-11">
                <input type="text" class="form-control" name="office" value="{{$member->office}}" id="title" placeholder="Job Office Address">
                </div>
                @error('office')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <div class="form-group row">
                <label for="title" class="col-sm-1 col-form-label">Age</label>
                <div class="col-sm-11">
                <input type="text" class="form-control" name="age" value="{{$member->age}}" id="title" placeholder="Input Age">
                </div>
                @error('age')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
