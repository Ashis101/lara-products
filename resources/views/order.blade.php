@extends('master')
@section('content')
    <div class="container">
        <table class="table table-bordered">
            <tbody>
              <tr>
                <td>Amount</td>
                <td>{{$price}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>0</td>
              </tr>
              <tr>
                <td>DChargeelivery </td>
                <td>10</td>
              </tr>
              <tr>
                <td>price Amount</td>
                <td>{{$price+10}}</td>
              </tr>
            </tbody>
        </table>
        <form action="/placeorder" method="POST" >
            @csrf
            <div class="form-group">
              <input type="textarea" name="address" class="form-control" placeholder="Enter Your Address">
            </div>
            <div class="form-group">
              <label>Payment Method</label>
              <input type="radio" name="payment" value="Cash"  ><span>Cash In Hand</span>
              <input type="radio" name="payment" value="Online" ><span>Online Payment</span>
              <input type="radio" name="payment" value="Card" ><span>Debit Card</span>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    
    
@endsection