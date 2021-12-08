@extends('sb.layout')

@section('judul')
<div class="container">
    Table
</div>
@endsection

@section('content')
    <div class="container">
        <form action="/create" method="POST">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-1 col-form-label">Name</label>
                <div class="col-sm-11">
                <input type="text" class="form-control" name="name" id="title" placeholder="Input Name">
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
                <input type="text" class="form-control" name="job" id="title" placeholder="Input Job">
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
                <input type="text" class="form-control" name="office" id="title" placeholder="Job Office Address">
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
                <input type="text" class="form-control" name="age" id="title" placeholder="Input Age">
                </div>
                @error('age')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
