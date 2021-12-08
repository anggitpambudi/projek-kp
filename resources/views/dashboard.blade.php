@extends('sb.layout')

@section('judul')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Area Chart Example
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart Example
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <a href="/create" class="btn btn-primary"><i class="fas fa-table me-1 fa-plus"></i></a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAME</th>
                        <th>JOB</th>
                        <th>OFFICE</th>
                        <th>AGE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>NO</th>
                        <th>NAME</th>
                        <th>JOB</th>
                        <th>OFFICE</th>
                        <th>AGE</th>
                        <th>ACTION</th>
                    </tr>
                </tfoot>
                <tbody>
                    @forelse ($member as $key=>$value)
                        <tr>
                            <td>{{ $key + 1 }}</th>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->job }}</td>
                            <td>{{ $value->office }}</td>
                            <td>{{ $value->age }}</td>
                            <td>
                                <a href="/dashboard/{{ $value->id }}/edit" class="btn btn-success"><i
                                        class="fas fa-pen"></i></a>
                                <form class="d-inline" action="/table/{{ $value->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" value="Delete"><i
                                            class="fas fa-trash"></i></button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr colspan="3">
                            <td>No data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <script src="{{ asset('sb-admin/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('sb-admin/assets/demo/chart-bar-demo.js') }}"></script>
    @endsection
