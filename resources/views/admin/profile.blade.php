@extends('sb.layout')

@section('judul')
    <div class="container">
        Profile
    </div>
@endsection

@section('content')
    <form action="/profile/{{$user->id}}" method="post">
        @csrf
        <div class="container">
            <div class="main-body">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ asset('img/' . $user->gambar) }}" alt="admin" class="rounded-circle"
                                        width="150">
                                    <div class="mt-3">
                                        <h4>{{ $user->name }}</h4>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Change Picture</label>
                                            <input class="form-control" type="file" id="formFile" name="gambar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" id="title">
                                    </div>
                                    <br><br><hr>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">E-mail</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="email" value="{{ $user->email }}" id="title">
                                    </div>
                                    <br><br><hr>
                                </div>
                                <button type="submit" class="btn btn-outline-secondary">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
