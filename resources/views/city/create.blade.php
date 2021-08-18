@extends('layouts.home')
@section('content')
<body>
    <div class="container"><br>
        <form action="/admin/city" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter the city Name">
            </div><br>
            <div class="form-group">
                <input type="number" name="number" class="form-control" placeholder="Enter the number">
                <input type="text" name="state" class="form-control" placeholder="Enter the state name">
            </div><br>
            <input type="submit" value="Save" class="btn btn-primary">
        </form>
    </div>
</body>

@endsection