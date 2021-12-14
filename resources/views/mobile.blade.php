@extends('master')
@section('content')
<div style="width: 100%;border:1px solid black">
    <div style="width:100%;display: grid;
        grid-template-columns: auto auto auto auto;
        grid-gap: 10px;">
            @foreach ($mobile as $item)
            <a href="/product/tv/{{$item["id"]}}" style="text-decoration: none">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$item['gallery']}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$item['name']}}</h5>
            </div>
            </div>
            </a> 
        @endforeach
    </div>
</div>
@endsection
