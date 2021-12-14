@extends('master')
@section('content')
    @if (count($search))
    <div class="container">
        @foreach ($search as $item)
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width: 18rem;border:none">
                    <img class="card-img-top" src="{{$item['gallery']}}" alt="Card image cap">
                  </div>
            </div>
            <div class="col-sm-6">
                <a href="/product/tv">back</a>
                <h2>{{$item['name']}}</h2>
                <h2><span>₹ </span>{{$item['price']}}</h2>
                <h2>{{$item['description']}}</h2>
                <form action="/addtocart/{{$item['id']}}" method="post">
                    @csrf
                    <button class="btn btn-primary">Add To Cart</button>
                </form>
                <br>
                <br>
                <button class="btn btn-success">Buy Now</button>
            </div>
        </div>
        @endforeach
       
    </div>
    @else
        <div class="container">
            <h2>No Result Avalavale Here</h2>
        </div>
    @endif
    
    
@endsection