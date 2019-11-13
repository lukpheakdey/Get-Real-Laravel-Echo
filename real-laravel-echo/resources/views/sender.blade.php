@extends('layouts')

@section('content')
<form action="/sender" method="post">
    <div class="form-group">
        <input type="text" name="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input for sending">
    </div>
    <button type="submit" class="btn btn-outline-success"> Send </button>
    {{ csrf_field() }}
@endsection
