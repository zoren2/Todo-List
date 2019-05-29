@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5"> Create ToDo's</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Create new todo
                </div>
                <div class="card-body">
                    @if($errors->any()) <!-- Adds an unordered list to display the errors -->
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/store-todos" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <textArea name="description" placeholder="Description" cols="5" rows="5"
                                      class="form-control"></textArea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Create ToDo</button>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection