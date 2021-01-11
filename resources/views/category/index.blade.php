@extends('layouts.admin')

@section('title')
Categories
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Categories</h3>

        <div class="card-tools">
            <a href="{{ route('category.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create
                new Category</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories ?? '' as $category)
                <tr>
                    <td>{{ $category['id'] }}</td>
                    <td>{{ $category['name'] }}</td>

                    <td>{{ date('d-m-Y h:i:s A', strtotime(  $category['created_at'])) }}</td>
                    <td>
                        <a href="{{ route('category.edit', $category['id']) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a class="btn btn-sm btn-danger" onClick="event.preventDefault(); 
                            document.getElementById('delete-form-{{$category['id']}}').submit();">Delete</a>

                        <form id="delete-form-{{$category['id']}}"
                            action="{{ route('category.destroy', $category['id']) }}" method="post">
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