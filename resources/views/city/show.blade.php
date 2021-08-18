@extends('layouts.home')
@section('content')
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-3"> {{$city->name}} </h3>
                <strong>
                    <i class="fa fa-clock"> {{$city->created_at->diffForHumans()}} </i>
                </strong>
            </div>
            <div class="card-body">
                <p class="card-subtitle">
                    {{$city->number}}
                </p>
            </div>
            <div class="card-body">
                <p class="card-subtitle">
                    {{$city->state}}
                </p>
            </div>
            <div class="card-body">
                <p class="card-subtitle">
                    {{$city->religion}}
                </p>
            </div>
        </div>
    </div>
</body>
@endsection