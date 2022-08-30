<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
class productController extends Controller
{
  public $detail;
  public $data;

  public function __construct(){
    $this->data = Product::all();
  }
  

  public function index(){
     return view("product",["products"=>$this->data]);
  }

  public function details($id){
   $this->detail =  Product::find($id);
    //return $this->detail;
   return view("detail",["data"=>$this->detail,"products"=>$this->data]);
  }

  public function addToCart(Request $request){
    if($request->session()->has("user"))
    {
      $cart = new Cart;
      $cart->user_id=$request->session()->get("user")['id'];
      $cart->product_id=$request->product_id;
      $cart->save();
      return redirect("/");
    } 
    else
    {
      return redirect("login");
    }
    
  }

 static public function cartItem(){
    $userId = Session::get('user')['id'];
    return Cart::where('user_id',$userId)->count();
  }

  public function cartList(){
    $userId = Session::get('user')['id'];
    $product = DB::table('carts')->join('products','carts.product_id','=','products.id')->where('carts.user_id',$userId)->select('products.*','carts.id as cart_id')->get();

    return view('cartlist',['products'=>$product]);
  }

  public function removeCart($id)
  {
     Cart::destroy($id);
     return redirect('cartlist');
  }

  public function orderNow(){
    $userId = Session::get('user')['id'];
    $product = DB::table('carts')->join('products','carts.product_id','=','products.id')->where('carts.user_id',$userId)->select('products.*','carts.id as cart_id')->sum('products.price');
    $total = 5300;
    return view("ordernow",['total'=>$total]);
  }

  public function orderPlace(Request $request){
    //return $request->input();

    $userId = Session::get('user')['id'];
    $allCart = Cart::where("user_id",$userId)->get();
    foreach($allCart as $cart)
    {
    $order = new Order();

    $order->product_id = $cart['product_id'];
    $order->user_id = $cart['user_id'];
    $order->status = "pending";
    $order->pay_method = $request->payment;
    $order->pay_status = "pending";
    $order->address = $request->address;
    $order->save();
    }
  }


}
