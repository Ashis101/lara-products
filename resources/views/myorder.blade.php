@extends('master')
@section('content')
    @if (count($order))
    <div class="container">
        @foreach ($order as $item)
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width: 18rem;border:none">
                    <img class="card-img-top" src="{{$item['gallery']}}" alt="Card image cap">
                </div>
            </div>
            <div class="col-sm-4">
                <h2>Name:{{$item['name']}}</h2>
                <h4>Price:{{$item['price']}}</h4>
                <h4>Status:{{$item['status']}}</h4>
                <h4>Payment-Method:{{$item['payment_method']}}</h4>
                <h4>Address:{{$item['address']}}</h4>
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