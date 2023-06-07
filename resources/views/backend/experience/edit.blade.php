@extends('backend.layouts.main')
@section('container')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <form action="/dashboard/experience/{{ $experiences->id }}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="title">Title Experience</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ old('title',$experiences->title) }}">
                </div>
                <div class="form-group">
                    <label for="position">Job Position</label>
                    <input type="text" class="form-control" id="position" name="position" placeholder="Enter Job Position" value="{{ old('position',$experiences->position) }}">
                </div>
    
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="start">Start</label>
                            <input type="text" class="form-control" id="start" name="start" placeholder="Enter Start" value="{{ old('start',$experiences->start) }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="end">End</label>
                            <input type="text" class="form-control" id="end" name="end" placeholder="Enter End" value="{{ old('end',$experiences->end) }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="skill">Skill</label>
                    <input type="text" class="form-control" id="sklill" name="skill" placeholder="Enter Skill" value="{{ old('skill',$experiences->skill) }}">
                </div>
    
                <div class="form-group">
                    <label for="comment">Description</label>
                    {{-- <textarea class="form-control" id="comment" rows="5"></textarea> --}}
                    <input id="x" type="hidden" name="desc" value="{{ old('desc',$experiences->desc) }}">
                    <trix-editor input="x"></trix-editor>
                </div>
                <div class="card-action">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/dashboard/experience" class="btn btn-danger"> Cancle</a>
                </div>
            </form>
           
        </div>
    </div>
</div>

@endsection