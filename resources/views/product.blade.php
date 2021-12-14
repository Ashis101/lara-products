@extends('master')
@section('content')

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 100%;height:500px">
        <div class="carousel-inner" style="width: 100%;height:100%">
            @foreach ($data as $item)
            <div class="carousel-item {{$item['id'] == 1 ? 'active':''}}" style="width: 50%;height:100%;margin-left:250px">
                <img style="height: 80%" class="d-block w-100" src="{{$item['gallery']}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block" >
                    <h5 style="color: black">{{$item['name']}}</h5>
                    <p style="color: black">{{$item['description']}}</p>
                  </div>
            </div>
            @endforeach
         
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
          <span class="sr-only" >Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only" >Next</span>
        </a>
      </div>
   

@endsection

@section('section')

<div class="container" style="width: 100% ;display: flex">
  <a href="/product/tv" style="margin-left:150px;">
    <div class="card" style="width: 18rem;border:none">
      <img class="card-img-top" src="{{$tv['gallery']}}" alt="Card image cap">
    </div>
  </a>
  <a href="/product/mobile" style="margin-left: 80px">
    <div class="card" style="width: 18rem;border:none">
      <img class="card-img-top" src="{{$mobile['gallery']}}" alt="Card image cap">
  </div>
  </a>
  
</div>
 

@endsection
