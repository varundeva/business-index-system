@extends('layouts.admin')

@section('title')
Create Permission
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Business Name</h3>
        <div class="card-tools">
            <a href="{{ route('business.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See All
                Business</a>
        </div>
    </div>
    <div class="card-body">
        <img src="{{ URL::asset('storage/businessImages/'.$business['image']) }}" alt="Image" width="50%">
        <table class="table table-condensed mt-2">
            <tr>
                <th>id:</th>
                <td>{{ $business['id'] }}</td>
            </tr>
            <tr>
                <th>Business Name:</th>
                <td>{{ $business['name'] }}</td>
            </tr>
            <tr>
                <th>Business Email:</th>
                <td>{{ $business['email'] }}</td>
            </tr>
            <tr>
                <th>Business Phone:</th>
                <td>{{ $business['phone'] }}</td>
            </tr>
            <tr>
                <th>Business Category:</th>
                <td>{{ $business['category'] }}</td>
            </tr>
            <tr>
                <th>Business Description:</th>
                <td>{{ $business['description'] }}</td>
            </tr>
            <tr>
                <th>Business Location:</th>
                <td>{{ $business['location'] }}</td>
            </tr>
            <tr>
                <th>Business Address:</th>
                <td>{{ $business['address'] }}</td>
            </tr>
            <tr>
                <th>Business Owner:</th>
                <td>{{ $business['owner'] }}</td>
            </tr>

            <tr>
                <th>Business Approval:</th>
                <td>{{ $business['approved'] }}</td>
            </tr>

        </table>
    </div>
    @role('admin')
    <div class="card-footer">

        <div class="card-tools">
            @if ($business['approved'] == 0)
            <a class="btn btn-success" onClick="event.preventDefault(); 
            document.getElementById('approve-form-{{$business['id']}}').submit();"><i class="fas fa-check-circle"></i>
                Approve Business</a>
            <form id="approve-form-{{$business['id']}}" action="{{ route('approveBusiness', $business['id']) }}"
                method="post">
                @csrf
            </form>
            @else
            <a class="btn btn-danger" onClick="event.preventDefault(); 
            document.getElementById('disapprove-form-{{$business['id']}}').submit();"><i
                    class="far fa-times-circle"></i>
                Disapprove Business</a>
            <form id="disapprove-form-{{$business['id']}}" action="{{ route('disapproveBusiness', $business['id']) }}"
                method="post">
                @csrf
            </form>
            @endif


        </div>
    </div>
    @endrole
</div>
@endsection