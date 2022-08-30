<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @yield("css")
    <!--Bootstrap 4-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200&family=Plus+Jakarta+Sans:wght@300&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
  .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    .slider-img{
        height: 400px!important;
        padding-top:12px;
        margin-left:10px;
    }
    .custom-product{
        
        float:left;
        width:100%;
    }
    .slider-text {
     
      color:white;
    }

    .trending-image{
      height:100px!important;
      margin:0px auto!important;
    }

    .trending-item {
      float:left;
      width:12%;
      margin:1%;
    }
    .trending-item:hover{
      box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
      cursor:pointer;
    }

    .trending-wrapper{
        margin: 30px;
        float:left;
    }

    .buy{
      margin:30px 0;
        float:left;
        width:100%;
        background:#f5f5f5;
    }


    .buy-product {
      float:left;
      width:12%;
      margin:1%;
    }

    .buy-image{
      height:100px!important;
      margin:0px auto!important;
    }

    footer{
      float:left;
      background:red;
      height:auto;
      width:100%;
    }

    h1,h2,h3,,h4,h5,h6{
      font-family: sans-serif!important;


    }

    .remove-focus {
    box-shadow: none!important;
    outline: none!important;
}

.cart-list-devider{
       
        margin-bottom: 20px;
        padding-bottom: 20px
    }


    /* Header coding */

    @media screen and (min-width: 992px) {
 

  .flex-container {
  display: flex;
  align-items: stretch;
  background-color:;
  margin:0px 50px;
  align-items:center;
  justify-content:center;
  }
  
  .flex-container > div,.flex-container > li {
  
  color: white;
  margin: 10px;
  text-align: center;
  
  }

  .search-input {
    width:400px!important;
    height:40px;
  }

  .search-btn {
     height:40px;
  }

  .search-form-cont{
    display:flex;
    justify-content:center;
    align-items:center;
    width:600px;
  }
}

 
   
    


 

    



   

 

  
</style>

</head>
<body>
{{View::make('header')}}
@yield("contents")
{{View::make("footer")}}





</body>
</html>