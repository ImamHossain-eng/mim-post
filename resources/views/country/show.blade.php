@extends('layouts.home')
@section('content')
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-3"> {{$country->name}} </h3>
                <strong>
                    <i class="fa fa-clock"> {{$country->created_at->diffForHumans()}} </i>
                </strong>
            </div>
            <div class="card-body">
                <p class="card-subtitle">
                    {{$country->name}}
                </p>
            </div>
            <div class="card-body">
                <p class="card-subtitle">
                    {{$country->population}}
                </p>
            </div>
            <div class="card-body">
                <p class="card-subtitle">
                    {{$country->religion}}
                </p>
            </div>
        </div>
    </div>
</body>
@endsection