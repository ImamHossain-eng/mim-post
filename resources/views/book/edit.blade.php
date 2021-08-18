@extends('layouts.home')
@section('content')
<body>
    <div class="container"><br>
        {{Form::open(['route'=> ['book.update', $book->id], 'method'=>'POST'])}}
        {{method_field('PUT')}}
            <div class="form-group">
                <input type="text" value="{{$book->name}}" name="name" class="form-control" placeholder="Enter Book Name">
            </div><br>
            <div class="form-group">
                <input type="text" value="{{$book->author}}" name="author" class="form-control" placeholder="Enter Book Author">
            </div><br>
            <div class="form-group">
                <textarea name="body" placeholder="Body" class="form-control" id="ckview" cols="30" rows="10"> {{$book->body}} </textarea>
            </div><br>
           
            <input type="submit" value="Save" class="btn btn-primary">
        {{Form::close()}}
    </div>
</body>