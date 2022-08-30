
<?php  


use App\Http\Controllers\productController;
$total = 0;
if(Session()->has("user"))
{
  $total = productController::cartItem();
}




?>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg" style="">
  <a class="navbar-brand" href="/">Ecommerce store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto flex-container">
      <li class="nav-item active" style="flex-grow:1;">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item" style="flex-grow:1;">
        <a class="nav-link" href="#">Order</a>
      </li>
     
      <div class="search-form-cont">
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control search-input remove-focus mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit">Search</button>
    </form>
</div>
     

  

       <!-- Dropdown -->
   
          <li class="nav-item"><a class="nav-link " href="/cartlist">cart({{$total}})</a></li>
          @if(Session::has('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown">
            {{Session::get('user')['name']}}
           </a>
            <ul class="dropdown-menu">
              <li class="dropdown-item"><a class="nav-link" href="/customlogout">Logout</a></li>
            </ul>
          </li>
          @else
          <li class="nav-item"><a class="nav-link" href="/">Login</a></li>
          @endif




    </ul>
  </div>
</nav>
