@extends('master')
@section('content')

<div class="container" style="height: 80%">
    <form style="margin: auto;width:60%;padding:40px" action="/login" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
       
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
</div>

@endsection