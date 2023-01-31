<?php



namespace App\Http\Controllers;
use App\Models\PromoCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sales()
    {
        return view('sales');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addsales()
    {
        return view('addsales');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function managesales()
    {
        return view('managesales');
    }

    public function coupon(){
        return view('addcoupon');
    
    }
    public function coupon_store(Request $request){
       
        $coupon=new PromoCode();
        $coupon->coupon_code = bin2hex(openssl_random_pseudo_bytes(6));
        $coupon->coupon_name = $request->input('coupon_name');
        $coupon->save();
        return redirect()->back();

    }
    // public function store(Request $request)
    // {
    //     $request->validate([
           
    //         'product_name' => 'required',
    //         'total_price' => 'required',
    //         'promo_code' => 'required',
    //         'discount_amount' => 'required',
    //         'grand_total' => 'required',
            
    //     ]);

    //      $customer = new PromoCode;
    //      $customer->product_name = $request->product_name;
    //      $customer->total_price = $request->total_price;
    //      $customer->promo_code = $request->promo_code;
    //      $customer->discount_amount = $request->discount_amount;
    //      $customer->grand_total = $request->grand_total;
        
    //     $customer->save();

    //     return redirect()->action([MyController::class, 'managesales'])
    //     //return redirect()->route('managesales');
    //    ->with('success','Sales Data has been created successfully.');
    // }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
