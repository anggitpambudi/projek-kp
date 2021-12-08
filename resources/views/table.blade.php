@extends('sb.layout')

@section('judul')
    Table
@endsection

@section('content')
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
                                <a href="/table/{{ $value->id }}/edit" class="btn btn-success"><i
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
    </div>
@endsection
