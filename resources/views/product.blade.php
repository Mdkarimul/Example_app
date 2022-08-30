
@extends("master")



@section("contents")
<div class="custom-product">
  
<div id="demo" class="carousel slide" data-ride="carousel" style="background-color:#090919;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
  @foreach($products as $items)
    <div class="carousel-item {{ $items['id']==1 ? 'active' : '' }}">
     <a href="/details/{{ $items['id'] }}">
     <img class="slider-img" src="images/{{ $items['gallary'] }}" >
      <div class="carousel-caption slider-text">
    <h3>{{ $items['name'] }}</h3>
    <br>
    <p id="desc">
    {{ $items['description'] }}
    </p>
  </div>
     </a>
    </div>
   @endforeach
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<div class="tranding-wrapper py-4">
  <h3 class="display-5 text-center py-2">Trending products !</h3>
  <hr>
  @foreach($products as $items)
  <div class="trending-item">
  <a href="/details/{{ $items['id'] }}">
    <center>
      <img class="trending-image " src="images/{{ $items['gallary'] }}" >
</center>
      <div class="">
    <h6 class="text-center py-2">{{ $items['name'] }}</h6>
  </div>
</a>
    </div>
    @endforeach
</div>




<br><br>
<div class="buy py-4">
  <h3 class="display-5 text-center py-2">All products !</h3>
  
  @foreach($products as $items)
  <div class="buy-product">
    <center>
      <img class="buy-image" src="images/{{ $items['gallary'] }}" >
</center>
      <div class="">
    <h6 class="text-center pt-2">{{ $items['name'] }}</h6>
    <p class="text-center ">$$ {{ $items['price'] }}</p>
  </div>
    </div>
    @endforeach
</div>




</div>

<!--
<div class="tranding-wrapper py-4">
  <h3 class="display-5 text-center py-2">Trending products !</h3>
  <hr>
  @foreach($products as $items)
  <div class="trending-item">
    <center>
      <img class="trending-image " src="images/{{ $items['gallary'] }}" >
</center>
      <div class="">
    <h6 class="text-center py-2">{{ $items['name'] }}</h6>
  </div>
    </div>
    @endforeach
</div>
-->

@endsection
