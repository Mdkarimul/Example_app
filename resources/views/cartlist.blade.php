@extends('master')
@section("contents")
<div class="custom-product py-4">
     <div class="col-sm-10 p-0 m-0">
        <div class="trending-wrapper">
            <h6>Result for Products</h6>
           
            @foreach($products as $item)
            <div class=" row searched-item cart-list-devider bg-light">
             <div class="col-sm-3 d-flex justify-content-center align-items-center">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{ URL::to('/') }}/images/{{$item->gallary}}">
                  </a>
             </div>
             <div class="col-sm-5">
                    <div class="">
                      <p style="font-weight:bold;font-size:17px;" class='p-0 m-0'>{{$item->name}}</p>
                      <p>{{$item->description}}</p>
                    </div>
             </div>
             <div class="col-sm-4 d-flex justify-content-between align-self-end">
                 <div>
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning my-2" >Remove to Cart</a>
                <a class="btn btn-success" href="/ordernow">Order Now</a>
               </div>
             </div>
            </div>
            @endforeach
          </div>


     </div>
</div>
@endsection 