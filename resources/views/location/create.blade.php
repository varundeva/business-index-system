@extends('layouts.admin')

@section('title')
Create Permission
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add new Permission</h3>
        <div class="card-tools">
            <a href="{{ route('location.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See all
                Permission</a>
        </div>
    </div>
    <form method="POST" action="{{ route('location.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" required placeholder="Banashankari">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="text" name="pincode" id="pincode"
                    class="form-control @error('pincode') is-invalid @enderror" value="{{ old('pincode') }}" required
                    placeholder="560062">
                @error('pincode')
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