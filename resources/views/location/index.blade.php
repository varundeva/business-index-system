@extends('layouts.admin')

@section('title')
Categories
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Categories</h3>

        <div class="card-tools">
            <a href="{{ route('location.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create
                new Location</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Pincode</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($locations as $location)
                <tr>
                    <td>{{ $location['id'] }}</td>
                    <td>{{ $location['name'] }}</td>
                    <td>{{ $location['pincode'] }}</td>
                    <td>{{ date('d-m-Y h:i:s A', strtotime(  $location['created_at'])) }}</td>
                    <td>
                        <a href="{{ route('location.edit', $location['id']) }}" class="btn btn-sm btn-warning">Edit</a>

                        <a class="btn btn-sm btn-danger" onClick="event.preventDefault(); 
                        document.getElementById('delete-form-{{$location['id']}}').submit();">Delete</a>

                        <form id="delete-form-{{$location['id']}}"
                            action="{{ route('location.destroy', $location['id']) }}" method="post">
                            @csrf @method('DELETE')
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection