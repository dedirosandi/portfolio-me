@extends('backend.layouts.main')
@section('container')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <a href="/dashboard/experience/create" class="btn btn-success">Create Experience</a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Position</th>
                        <th scope="col">Start/End</th>
                        <th scope="col">Skill</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($experiences as $experience)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $experience->title }}</td>
                        <td>{{ $experience->position }}</td>
                        <td>{{ $experience->start }}/{{ $experience->end }}</td>
                        <td>{{ $experience->skill }}</td>
                        
                        <td>
                            <a href="/dashboard/experience/{{ $experience->id }}/edit" class="btn btn-sm btn-success"><i class="la la-pencil-square-o"></i></a>
                            <form action="/dashboard/experience/{{ $experience->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-sm btn-danger border-0"><i class="la la-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection