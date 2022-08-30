@extends('master')
@section("contents")
<div class="custom-product py-4">
     <div class="col-sm-10 py-4">
        <table class="table m-4 table-striped table-bordered">
            <tbody>
            <h5>Order details</h5>
              <tr>
                <td>Amount</td>
              <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" class="p-4" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="remove-focus form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>
          </div>
     </div>
</div>
@endsection 