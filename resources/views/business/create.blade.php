@extends('layouts.admin')

@section('title')
Create Business
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add new Busienss</h3>
        <div class="card-tools">
            <a href="{{ route('business.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See All
                Business</a>
        </div>
    </div>
    <form method="POST" action="{{ route('business.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Business Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required
                    placeholder="Avenuepad Pvt Ltd">
            </div>
            <div class="form-group">
                <label>Business Description</label>
                <textarea required name="description" class="form-control" rows="3"
                    placeholder="Computer-Controlled Machine Tool Operator, Metal and Plastic">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="email">Business Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"
                    placeholder="contact@business.com">
            </div>
            <div class="form-group">
                <label for="phone">Business Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required
                    placeholder="91234567896">
            </div>
            <div class="form-group">
                <label>Select Category</label>
                <select name="category" class="form-control">
                    <option value="">Choose Your Business Category</option>
                    @foreach ($categories as $category)

                    <option value="{{ $category['name'] }}" @if (old('category')==$category['name']) selected="selected"
                        @endif>{{ $category['name']}} - {{ $category['name'] }}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Select Location</label>
                <select name="location" class="form-control">
                    <option value="">Choose Your Business Location</option>
                    @foreach ($locations as $location)

                    <option value="{{ $location['name'] }}" @if (old('location')==$location['name']) selected="selected"
                        @endif>{{ $location['name']}} - {{ $location['pincode'] }}</option>

                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Business Address</label>
                <textarea required name="address" class="form-control" rows="3"
                    placeholder="4066  Arthur Avenue, Sandwich, IL, 60548">{{ old('address') }}</textarea>
            </div>
            <div class="form-group">
                <label for="fileInput">Image/Business Logo</label>
                <input required name="image" accept="image/*" type="file" id="fileInput">
                <p class="help-block">Image Files Only</p>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Create Business</button>
        </div>
    </form>
</div>
@endsection