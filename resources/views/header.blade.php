<?php
use App\Http\Controllers\CartController;
$cart=new CartController();
$c=0;
if(Session::has('user')){
  $c=$cart->count();
}


?>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            @if (Session::has('user'))
            <li class="nav-item">
              <a class="nav-link" href="/mycart">Cart({{$c}})</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="/myorder">orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout">logout</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="/login">login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/reg">signup</a>
            </li>
            @endif
            
           
          </ul>
          <form class="form-inline my-2 my-lg-0" action="/search" method="GET">
            <input name="key" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
</div>