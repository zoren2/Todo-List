@extends('layouts.app')

@section('title')
    Todo's List
@endsection

@section('content')
    <h1 class="text-center my-5">TODOS PAGE</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Todo's
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->name }}

                                <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right">View</a>


                                @if($todo->completed === 0)
                                    <a href="/todos/{{ $todo->id }}/complete"
                                       class="btn btn-danger btn-sm float-right mx-3">Complete ToDo</a>

                                @else
                                    <p class="float-right mx-4 my-1 text-success"> Completed </p>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
