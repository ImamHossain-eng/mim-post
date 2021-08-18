@extends('layouts.home')
@section('content')
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-3"> {{$book->name}} </h3>
                <strong>
                    <i class="fa fa-clock"> {{$book->created_at->diffForHumans()}} </i>
                </strong>
            </div>
            <div class="card-body">
                <p class="card-subtitle">
                    {{$book->author}}
                </p>
                <hr>
                <p>
                    {!!$book->body!!}
                </p>
            </div>
        </div>
    </div>
</body>
@endsection