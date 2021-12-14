@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width: 18rem;border:none">
                    <img class="card-img-top" src="{{$mobile['gallery']}}" alt="Card image cap">
                  </div>
            </div>
            <div class="col-sm-6">
                <a href="/product/tv" class="btn btn-link">back</a>
                <h2>{{$mobile['name']}}</h2>
                <h2><span>₹ </span>{{$mobile['price']}}</h2>
                <h2>{{$mobile['description']}}</h2>
                <form action="/addtocart/{{$mobile['id']}}" method="post">
                    @csrf
                    <button class="btn btn-primary">Add To Cart</button>
                </form>
                <br>
                <button class="btn btn-success">Buy Now</button>

            </div>
        </div>
    </div>
    
@endsection