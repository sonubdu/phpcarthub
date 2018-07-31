<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;

class homeController extends Controller
{
    //
 public function index(){
        
        $products=Product::inRandomOrder()->take(8)->get(); 
        return view('pages/home_content')->with("products",$products);

    }

  public function add_to_cart($id,$qty=1){
    
    $products=Product::where("id",$id)->first(); 
    if(empty($products)){
         
     }else{
     $data['qty']=$qty;
     $data['id']=$products->id;
     $data['name']=$products->name;
     $data['price']=$products->price;
     $data['option']['image']=$products->image;
     Cart::add($data);
     return Redirect::to('/cart');
     }

   
  } 


  public function show_cart(){
    $cartdata=Cart::content();
     return view("pages/cart")->with("cartdata",$cartdata);    
  }

}
