@extends('layouts.home')
@section('content')
<body>
    <div class="container"><br>
        {{Form::open(['route'=> 'book.store', 'method'=>'POST'])}}
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter Book Name">
            </div><br>
            <div class="form-group">
                <input type="text" name="author" class="form-control" placeholder="Enter Book Author">
            </div><br>
            <div class="form-group">
                <textarea name="body" placeholder="Body" class="form-control" id="ckview" cols="30" rows="10"></textarea>
            </div><br>
           
            <input type="submit" value="Save" class="btn btn-primary">
        {{Form::close()}}
    </div>
</body>

@endsection