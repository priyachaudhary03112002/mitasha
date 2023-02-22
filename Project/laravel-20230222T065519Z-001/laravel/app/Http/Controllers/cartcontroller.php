<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\product;
use App\Models\customer;
use Alert;
use session;

class cartcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=product::all();	  
        $customer=customer::all();
        return view('frontend.cart',['product'=>$product,'customer'=>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_cart()
    {
        
        $data=cart::join('products','carts.prod_id','=','products.id')
		->join('customers','carts.cust_id','=','customers.id')
        ->where('customers.id','=',session('cust_id'))
        ->get(['products.*','customers.id','carts.*']);
        return view('frontend.cart',['fetch'=>$data]);
    }

  // ({{count($fetch)}}) 
    // $data=cart::join('products','carts.prod_id','=','products.id')
    // ->join('customers','carts.cust_id','=','customers.id')
    // ->where('customers.id','=',session('cust_id'))
    // ->get(['products.*','customers.id','carts.*']);
    // return view('frontend.cart',['fetch'=>$data]);

    // $data=cart::join('products','carts.prod_id','=','products.id')
    // ->join("customers",'carts.cust_id','=','customers.id')->get(['products.*','customers.*','carts.*']);
    // return view('frontend.cart',['fetch'=>$data]);

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cart(Request $request)
    {
        $data=new cart;
		$data->prod_id = $request->prod_id;
        $data->cust_id = $request->cust_id;
        $data->qty = $request->qty;
        $data->save();
		Alert::success('success', 'Cart Success');
		return back();
    }

    // public function cartcount(){
    //          //$count = cart::where('customers.id','=',session('cust_id'))->count();
    //          $count = cart::all()->count('id');
    //          return view('frontend.cart',['count'=>$count]);
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

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
    public function update_cart(Request $request, $id)
    { 
        $data=cart::find($id);
        if (!$data==0) {
        $data->qty = $request->qty;       
        $data->update();
		
        }else{

        }
        Alert::success('success','update cart Success');
		return redirect('/product-single');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_cart($id)
    {
        $data=cart::find($id);
		$data->delete();
		Alert::success('success', 'Delete  cart Success');
		return back();
    }
}
