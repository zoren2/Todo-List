@extends('layouts.app')

@section('title')
    Single Todo: {{$todo->name}}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>

                <div class="card-body">
                    {{ $todo->description }}
                </div>
            </div> <!-- End card -->
            <a href="/todos/{{$todo->id}}/edit" class="btn btn-primary btn-lg my-5">Edit</a>
        </div>
    </div>
@endsection