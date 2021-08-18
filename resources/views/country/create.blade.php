@extends('layouts.home')
@section('content')
<body>
    <div class="container"><br>
        <form action="/admin/country" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter Country Name">
            </div><br>
            <div class="form-group">
                <input type="number" name="population" class="form-control" placeholder="Enter Country Population">
            </div><br>
            <div class="form-group">
                <input type="text" name="religion" class="form-control" placeholder="Enter Country Religion">
            </div><br>
            <input type="submit" value="Save" class="btn btn-primary">
        </form>
    </div>
</body>

@endsection