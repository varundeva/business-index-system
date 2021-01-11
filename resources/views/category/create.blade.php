@extends('layouts.admin')

@section('title')
Create Category
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add new Category</h3>
        <div class="card-tools">
            <a href="{{ route('category.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See all
                Category</a>
        </div>
    </div>
    <form method="POST" action="{{ route('category.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" required placeholder="Category Name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Create Permission</button>
        </div>
    </form>
</div>
@endsection