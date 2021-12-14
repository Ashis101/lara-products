@extends('master')
@section('content')
    @if (count($cart))
    <div class="container">
        @foreach ($cart as $item)
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
                <form action="/mycart" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$item['cartid']}}">
                    <button class="btn btn-danger">Delete</button>
                </form>
                <br>
                <br>
                
            </div> 
        </div>
        @endforeach
        <div style="display: flex;flex-direction:column;margin-top: 50px">
            <h2>Total Price: {{$total}}</h2>
            <form action="/order" method="post">
                @csrf
                <button class="btn btn-success">Buy Now</button>
            </form>
        </div>
    </div>
    @else
        <div class="container">
            <h2>No Result Avalavale Here</h2>
        </div>
    @endif
    
    
@endsection