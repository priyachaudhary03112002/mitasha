<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wishlist;
use App\Models\product;  
use App\Models\customer;
use App\Models\cart;
use Alert;
class wishlistController extends Controller
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

    public function manage_wishlist()
    {
        
        $data=wishlist::join('products','wishlists.prod_id','=','products.id')
		->join('customers','wishlists.cust_id','=','customers.id')
        ->where('customers.id','=',session('cust_id'))
        ->get(['products.*','customers.id','wishlists.*']);
        $wish_data=wishlist::where('cust_id','=',session('cust_id'))->get();
        $total_wish= $wish_data->count(); 
        $cart_data=cart::where('cust_id','=',session('cust_id'))->get();
        $total_cart = $cart_data->count();
        return view('frontend.wishlist',['fetch'=>$data,'total_wish'=>$total_wish,'total_cart'=>$total_cart]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function wishlist(Request $request)
    {
        $data=new wishlist;
		$data->prod_id = $request->prod_id;
        $data->cust_id = $request->cust_id;
        $data->save();
		Alert::success('success', 'Wishlist Success');
		return redirect('/shop');
    }

    /**
     * S    tore a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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
        $data=wishlist::find($id);
        $data->delete();
        Alert::success('success', 'Delete Success');
		return back();
    }
}
