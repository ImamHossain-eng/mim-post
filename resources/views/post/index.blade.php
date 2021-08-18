@extends('layouts.home')
@section('content')
    <body>
       <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created_at</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $a)
                <tr>
                    <td>{{$a->id}}</td>
                    <td> {{$a->title}} </td>
                    <td> {{$a->body}} </td>
                    <td> {{$a->created_at}} </td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
       </div>
    </body>
@endsection