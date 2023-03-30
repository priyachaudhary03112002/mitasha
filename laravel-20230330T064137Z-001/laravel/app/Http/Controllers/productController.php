<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\category;
use App\Models\cart;
use App\Models\wishlist;

use Hash;
use Alert;

use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=category::all();	  // select * from
        return view('backend.add_product',['fetch'=>$category]);
    }

    public function add_product(Request $request)
    {

        $validated = $request->validate([
            'prod_name' => 'required',
            'short_desc' => 'required',
            'long_disc' => 'required',
            'mainprice' => 'required',
            'discprice' => 'required',
            'img' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'multiple_img' => 'required',
            'multiple_img.*' => 'mimes:jpg,png,jpeg,gif,svg'

            
            ]);
        $data=new product;
		$data->prod_name=$request->prod_name;
        $data->cate_id=$request->cate_id;
        $data->short_desc=$request->short_desc;
        $data->long_disc=$request->long_disc;
        $data->mainprice=$request->mainprice;
        $data->discprice=$request->discprice;
       
		// img upload
		$img=$request->file('img');		
		$imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
		$img->move('backend/assets/img/upload/product/',$imgname);  // use move for move image in public/images
		$data->img=$imgname; // name store in db

        $multiple_imgarr = [];
        if($request->hasfile('multiple_img'))
         {
            foreach($request->file('multiple_img') as $multiple_img)
            {
                $name = time().rand(1000,9999).'_img.'.$multiple_img->extension();
                $multiple_img->move('backend/assets/img/upload/product/',$name);  
                $multiple_imgarr[] = $name;  
            }
           $data->multiple_img=implode(',',$multiple_imgarr);
        }
  


		$data->save();
		Alert::success('success', 'product Success');
		return back();
    }

    function manage_product(Request $request) 
	{
        $search=$request->search;
        if($search!="")
        {  
            $fetch=product::join('categories','products.cate_id','=','categories.id')
            ->where('products.prod_name', 'LIKE' ,'%'.$search.'%')
            ->orWhere('products.short_desc', 'LIKE' ,'%'.$search.'%')
            ->get(['products.*','categories.cate_name']);
        }
         else{
        $fetch = product::join('categories', 'products.cate_id', '=','categories.id')->get(['products.*','categories.cate_name']);
         }
        return view('backend.manage_product',compact('fetch','search'));
	}
    public function random_product() 
    {
       $cart_data=cart::where('cust_id','=',session('cust_id'))->get();
       $total_cart = $cart_data->count();
       $wish_data=wishlist::where('cust_id','=',session('cust_id'))->get();
       $total_wish= $wish_data->count(); 
	   $data=product::inRandomOrder()->limit(8)->get();	
       return view('frontend.index',['data'=>$data,'total_cart'=>$total_cart,'total_wish'=>$total_wish]);
       return view('frontend./',['data'=>$data]);
    }    
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function random_single($id)
    // {
    //        // $category=category::all();
    //         $data=product::where("id",'=',$id)->first();
    //         $fetch=product::inRandomOrder()->limit(4)->get();	
    //         return view('frontend.product_single',['fetch'=>$data,'random'=>$fetch]);
    // }
      
 

    public function create()
    {
        //
    }

    

    /**
     * Store a newly created resource in storage.
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
        $category=category::all();
        $data=product::where("id",'=',$id)->first();
		return view('backend.edit_product',['category'=>$category,'product'=>$data]);
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
        $data=product::find($id);
        $data->cate_id=$request->cate_id;
		$data->prod_name=$request->prod_name;  
        $data->short_desc=$request->short_desc;
        $data->long_disc=$request->long_disc;
        $data->mainprice=$request->mainprice;
        $data->discprice=$request->discprice;
       
		// img upload
       $old_file=$data->img;
		if($request->hasFile('img'))// check file or not
		{
			$img=$request->file('img');		
			$imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
			$img->move('backend/assets/img/upload/product/',$imgname);  // use move for move image in public/images
			$data->img=$imgname; // name store in db
			//unlink('backend/assets/img/upload/product/'.$old_file);
		}


       $old_file1=$data->multiple_img;
		
        $multiple_imgarr = [];
        if($request->hasfile('multiple_img'))
         {
            foreach($request->file('multiple_img') as $multiple_img)
            {
                $name = time().rand(1000,9999).'_img.'.$multiple_img->extension();
                $multiple_img->move('backend/assets/img/upload/product/',$name);  
                $multiple_imgarr[] = $name;  
            }
           $data->multiple_img=implode(',',$multiple_imgarr);
         //  unlink('backend/assets/img/upload/product/'.$old_file1);
        }
       
		$data->update();
		Alert::success('success', ' update product Success');
		return redirect('/manage_product');
    }
    public function viewall()
    {  
       $cart_data=cart::where('cust_id','=',session('cust_id'))->get();
       $total_cart = $cart_data->count(); 
       $wish_data=wishlist::where('cust_id','=',session('cust_id'))->get();
       $total_wish= $wish_data->count();      
        $product=product::paginate(8);
        $category=category::all();	
       return view('frontend.shop',['data'=>$product,'cate'=>$category,'total_cart'=>$total_cart,'total_wish'=>$total_wish]);
    }

    public function product_category($cid) 
    {  
        $cart_data=cart::where('cust_id','=',session('cust_id'))->get();
        $total_cart = $cart_data->count(); 
        $wish_data=wishlist::where('cust_id','=',session('cust_id'))->get();
        $total_wish= $wish_data->count();      	   
        $category=category::all();	
       $data=product::where("cate_id",'=',$cid)->get();	
       return view('frontend.product_page',['fetch'=>$data, 'cate'=>$category, 'total_cart'=>$total_cart, 'total_wish'=>$total_wish]);
    }
    public function edit_product($id)
    {
        $cart_data=cart::where('cust_id','=',session('cust_id'))->get();
        $total_cart = $cart_data->count(); 
        $wish_data=wishlist::where('cust_id','=',session('cust_id'))->get();
        $total_wish= $wish_data->count();      
        $product=product::all();
        $data=product::where("id",'=',$id)->first();
        $fetch=product::inRandomOrder()->limit(4)->get();
		return view('frontend.product_single',['product'=>$product,'product_data'=>$data,'data'=>$fetch,'total_cart'=>$total_cart,'total_wish'=>$total_wish]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=product::find($id);
        $old_file=$data->img;
       // $old_file1=$data->multiple_img;
		$data->delete();
        unlink('backend/assets/img/upload/product/'.$old_file);
        //unlink('backend/assets/img/upload/product/'.$old_file1);
		Alert::success('success', 'Delete Success');
		return back();
    }
    public function product_status($id)
    {
		$data=product::find($id);
		$status=$data->status;
		if($status=="Out of stock")
		{
			$data->status="stock";
			$data->update();
		   Alert:: success('stock Success');
			return back();	
			
		}
		else
		{
			$data->status="Out of stock";
			$data->update();
			Alert:: warning('Out of stock Success');
			return back();	
		}
    }
}
