@extends('layouts.home')
@section('content')
    <body>
       <div class="container">
        <table class="table">
            <br>
            
            <a href="/admin/city/create" class="btn btn-primary">Add New</a>
            <br>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>State</th>
                    <th>Created_at</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cities as $city)
                <tr>
                    <td>{{$city->id}}</td>
                    <td> {{$city->name}} </td>
                    <td> {{$city->number}} </td>
                    <td> {{$city->state}} </td>
                    <td> {{$city->created_at}} </td>
                    <td>
                        <a href="/admin/city/{{$city->id}}" class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                        </a>
                        {{Form::open(['route'=>['city.destroy', $city->id], 'method'=>'DELETE'])}}
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        {{Form::close()}}
                    </td>
                </tr>
                @empty 
                <tr class="table-danger">
                    <td colspan="6">No Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
       </div>
    </body>
@endsection