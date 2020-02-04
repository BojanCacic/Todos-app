@extends('layout.app')


@section('content')
<div class="container">
    <div class="h1 text-center my-5">
        {{ $todo->name}}
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                Details
            </div>
            <div class="card-body">
                {{$todo->description}}
            </div>
        </div>
    </div>
</div>
@endsection