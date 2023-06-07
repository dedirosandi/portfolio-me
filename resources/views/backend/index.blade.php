@extends('backend.layouts.main')
@section('container')
<h4 class="page-title">Dashboard</h4>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Button Original</h4>
            <p class="card-category">Here is a subtitle for this table</p>
        </div>
        <div class="card-body">
            <p class="demo">
                <button class="btn btn-default">Default</button>

                <button class="btn btn-primary">Primary</button>

                <button class="btn btn-info">Info</button>

                <button class="btn btn-success">Success</button>

                <button class="btn btn-warning">Warning</button>

                <button class="btn btn-danger">Danger</button>

                <button class="btn btn-link">Link</button>
            </p>
        </div>
    </div>
</div>
@endsection