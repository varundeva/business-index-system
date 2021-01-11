@extends('layouts.admin')

@section('title')
Business
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Business</h3>

        <div class="card-tools">
            <a href="{{ route('business.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create
                new Business</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Location</th>
                    <th>Owner</th>
                    <th>Approved</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($businesses as $business)
                <tr>
                    <td>{{ $business['id'] }}</td>
                    <td>{{ $business['name'] }}</td>
                    <td>{{ $business['category'] }}</td>
                    <td>{{ $business['location'] }}</td>
                    <td>{{ $business['owner'] }}</td>

                    <td>
                        @php
                        $approved = '<span class="label bg-green p-2">Approved</span>';
                        $notApproved = '<span class="label bg-red p-2">Not Approved</span>';
                        if ($business['approved']== 1) {
                        echo($approved);
                        } else {
                        echo($notApproved);
                        }
                        @endphp
                    </td>

                    <td>
                        @role('admin')
                        @if ($business['approved'] == 0)
                        <a class="btn btn-success" onClick="event.preventDefault(); 
            document.getElementById('approve-form-{{$business['id']}}').submit();"><i class="fas fa-check-circle"></i>
                            Approve</a>
                        <form id="approve-form-{{$business['id']}}"
                            action="{{ route('approveBusiness', $business['id']) }}" method="post">
                            @csrf
                        </form>
                        @else
                        <a class="btn btn-danger" onClick="event.preventDefault(); 
            document.getElementById('disapprove-form-{{$business['id']}}').submit();"><i
                                class="far fa-times-circle"></i>
                            Disapprove</a>
                        <form id="disapprove-form-{{$business['id']}}"
                            action="{{ route('disapproveBusiness', $business['id']) }}" method="post">
                            @csrf
                        </form>
                        @endif
                        @endrole
                        <a href="{{ route('business.show', $business['id']) }}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{ route('business.edit', $business['id']) }}" class="btn btn-sm btn-warning">Edit</a>

                        @can('delete')
                        <a class="btn btn-sm btn-danger" onClick="event.preventDefault(); 
                        document.getElementById('delete-form-{{$business['id']}}').submit();">Delete</a>
                        <form id="delete-form-{{$business['id']}}"
                            action="{{ route('business.destroy', $business['id']) }}" method="post">
                            @csrf @method('DELETE')
                        </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection