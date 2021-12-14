@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width: 18rem;border:none">
                    <img class="card-img-top" src="{{$tv['gallery']}}" alt="Card image cap">
                  </div>
            </div>
            <div class="col-sm-6">
                <a href="/product/tv">back</a>
                <h2>{{$tv['name']}}</h2>
                <h2><span>₹ </span>{{$tv['price']}}</h2>
                <h2>{{$tv['description']}}</h2>
                <form action="/addtocart/{{$tv['id']}}" method="post">
                    @csrf
                    <button class="btn btn-primary">Add To Cart</button>
                </form>
                <br>
                <br>
                <button class="btn btn-success">Buy Now</button>
            </div>
        </div>
    </div>
    
@endsection