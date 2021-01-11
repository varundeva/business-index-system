@extends('layouts.admin')

@section('title')
Edits Category
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

    <form method="POST" action=" {{ route('category.update',$category[0]['id']) }}">
        @method('PATCH')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ $category[0]['name'] }}" required placeholder="Category Name">

            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Create Permission</button>
        </div>
    </form>
</div>
@endsection