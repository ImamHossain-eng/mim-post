@extends('layouts.home')
@section('content')
    <body>
       <div class="container">
           <br>
           <a href="/admin/book/create" class="btn btn-primary">Add New</a>
           <br>
        
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td> {{$book->name}} </td>
                    <td>{{$book->author}}</td>
                    <td> {{$book->created_at->diffForHumans()}} </td>
                    <td> {{$book->updated_at->diffForHumans()}} </td>
                    <td>
                        <a href="/admin/book/{{$book->id}}" class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="/admin/book/{{$book->id}}/edit" class="btn btn-success">
                            <i class="fa fa-check"></i>
                        </a>
                        {{Form::open(['route'=>['book.destroy', $book->id], 'method'=>'DELETE', 'style'=>'display:inline;'])}}
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        {{Form::close()}}
                      
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       </div>
    </body>
@endsection