@extends("master")
@section("css")
<link rel="stylesheet" href="{{ URL::to('/') }}/css/details.css">
@endsection
@section("contents")
<div class="container py-4">
    <div class="row p-4">
        <div class="col-md-6">
       <img class="detail-img" src="{{ URL::to('/') }}/images/{{$data['gallary']}}" width="100%" >
        </div>
        <div class="col-md-6">

    
    <h3>{{ $data['name'] }}</h3>
    <h5>$$ {{ $data['price'] }}</h5>
    <p><b>Details : </b>{{ $data['description'] }}</p>




  <div class="d-flex">
   <form action="/add-to-cart" method="post">
     @csrf
     <input type="hidden" name="product_id"  value="{{$data['id']}}">
   <button class="btn btn-success remove-focus mr-4">Add to cart<i class="fa fa-shopping-cart ml-1"></i></button>
   </form>
    <button class="btn btn-warning remove-focus">Buy now</button>
</div>













        </div>
        <a href="/"><i class="fa fa-angle-double-left"></i> Back</a>
    </div>
</div>

<div class="buy py-4">
  <h3 class="display-5 text-center py-2">Related products !</h3>
  
  @foreach($products as $items)
  <div class="buy-product">
    <center>
      <img class="buy-image" src="{{ URL::to('/') }}/images/{{ $items['gallary'] }}" >
</center>
      <div class="">
    <h6 class="text-center pt-2">{{ $items['name'] }}</h6>
    <p class="text-center ">$$ {{ $items['price'] }}</p>
  </div>
    </div>
    @endforeach
</div>
@endsection