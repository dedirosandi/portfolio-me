@extends('backend.layouts.main')
@section('container')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <a href="/dashboard/service/create" class="btn btn-success">Create Service</a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->desc }}</td>
                        <td>
                            <a href="/dashboard/service/edit/{{ $service->id }}" class="btn btn-sm btn-success"><i class="la la-pencil-square-o"></i></a>
                            <a href="/dashboard/service/delete/{{ $service->id }}" class="btn btn-sm btn-danger"><i class="la la-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection