<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function product(){
        $Products = Product::all();
        return view('product',['products'=>$Products]);
    }
    public function detail($id){
        $detail =  Product::find($id);
        return view('detail',['detail'=>$detail]);
    }
    public function search(Request $req){
        $data = Product::
        where('name','like','%'.$req->input('query').'%')
        ->get();
        return view('search',['data'=>$data]);
    }
    public function cart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('login');
        }
    }
    static function CartItem(){
        $user = Session::get('user')['id'];
        return Cart::where('user_id',$user)->count();
    }
}
