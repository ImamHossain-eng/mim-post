@extends('layouts.home')
@section('content')
    <body>
       <div class="container">
           <br>
           <a href="/admin/country/create" class="btn btn-primary">Add New Country</a>
           <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>id</th>
                    <th>Name</th>
                    <th>Population</th>
                    <th>Religion</th>
                    <th>Created_at</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @forelse($countries as $key => $country)
                <tr>
                    <td> {{$key+1}} </td>
                    <td>{{$country->id}}</td>
                    <td>{{$country->name}} </td>
                    <td>{{number_format($country->population)}} </td>
                    <td>{{$country->religion}} </td>
                    <td>{{ date('F d, Y', strtotime($country->created_at))}} at {{ date('g:ia', strtotime($country->created_at))}} </td>
                    <td>
                        <a href="/admin/country/{{$country->id}}" class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                        </a>
                        {{Form::open(['route'=>['country.destroy', $country->id], 'method'=>'DELETE'])}}
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        {{Form::close()}}
                    </td>
                </tr>
                @empty 
                <tr class="table-danger text-center">
                    <td colspan="6"><strong>No Data</strong></td>
                </tr>
                @endforelse
            </tbody>
        </table>
       </div>
    </body>
@endsection