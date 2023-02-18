<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\PromoCode;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
        $products = Product::get();
            $coupon = 1;
        $coupons = PromoCode::get();
    
        return view('order',compact('products','coupon','coupons'));
    }
    public function store(Request $request){
        $products = $request->input('products');
        $result = 1;
        foreach($products as  $item){
            $result = $result + $item ;
        }
       
        $previous_order = Order::where('user_name',$request->input('user_name'))
        ->get()
        ->count();
        if ($previous_order >= 1) {
            $check_coupon = PromoCode::where('coupon_code', $request->input('coupon_code'))
            ->first();
        if(!$check_coupon->coupon_used){
            $result=$result-5000;
                $check_coupon->coupon_used = 1;
                $check_coupon->save();
        }else{
            
        }
        }

       // dd($result);

        $order = new Order;

        $order->user_name=$request->input('user_name');
        $order->total_price=$result;
        $order->save();

        return redirect()->back();
        
       
    }
}