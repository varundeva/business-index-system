@extends('layouts.admin')

@section('title')
Edit Location
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add new Location</h3>
        <div class="card-tools">
            <a href="{{ route('location.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See all
                Locationd</a>
        </div>
    </div>

    <form method="POST" action="{{ route('location.update',$location[0]['id']) }}">
        @method('PATCH')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') ? old('name') : $location[0]['name'] }}" required placeholder="Banashankari">
            </div>
            <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="text" name="pincode" id="pincode"
                    class="form-control @error('pincode') is-invalid @enderror"
                    value="{{ old('pincode') ? old('pincode') : $location[0]['pincode'] }}" required
                    placeholder="560062">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Location</button>
        </div>
    </form>
</div>
@endsection