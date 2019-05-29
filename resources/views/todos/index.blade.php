<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ToDo's</title>
    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <h1 class="tex-center my-5"> Todo's Page </h1>
    <div class="card card-default">
        <div class="card-header">
            <div class="card-body">
                <ul class="list-group">
                    @foreach($todos as $todo)
                        <li class="list-group-item">
                            {{ $todo->name }}
                            <button class="btn btn-primary btn-sm float-right"> View </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
