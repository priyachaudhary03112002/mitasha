<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }
    public function profile()
    {
       $user = Auth::guard('api')->user();
        return  response()->json(['status'=> "Login data",'data'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'name'=>'Required',
            'product_detail'=>'Required',
            'price'=>'Required',
        ]);
		
		if($validate->fails())
		{
			return [
				'success' => 0, 
				'message' => $validate->messages(),
			];
		}
		else
		{
        $data=new product;
			$data->name=$request->name;
			$data->product_detail=$request->product_detail;
			$data->price=$request->price;	
			
			$data->save();
			return response()->json([
			'status'=>"Product Success",		
			'result'=>$data
			]);
		}
    }

    public function allshow()
    {
       $data=product::all();
	   return response()->json([
	   'status'=>"Product Success",
	   'result'=>$data
	   ]);
    }
    public function register(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'name'=>'Required',
            'email'=>'Required|email',
            'password'=>'Required',
        ]);
		
		if($validate->fails())
		{
			return [
				'success' => 0, 
				'message' => $validate->messages(),
			];
		}
		else
		{
        $data=new user;
              $data->name=$request->name;
			$data->email=$request->email;
			$data->password=Hash::make($request->password);
			
			$data->save();
			return response()->json([
			'status'=>"Register Success",		
			'result'=>$data
			]);
		}
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate=Validator::make($request->all(),[
            'name'=>'Required',
            'product_detail'=>'Required',
            'price'=>'Required',
        ]);
		
		if($validate->fails())
		{
			return [
				'success' => 0, 
				'message' => $validate->messages(),
			];
		}
		else
		{
			$data=product::find($id);
			$data->name=$request->name;
			$data->product_detail=$request->product_detail;
			$data->price=$request->price;	
			$data->update();
			return response()->json([
                'status'=>"Product  update Success",
                'result'=>$data
			]);
		}
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        product::find($id)->delete();
		return response()->json([
		'status'=>"Product Delete Success"
		]);
    }

    public function productlogin(Request $request)
	{
        $input = $request->all();
        $vallidation = Validator::make($input,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($vallidation->fails()){
            return response()->json(['error' => $vallidation->errors()],422);
        }


        if (Auth::attempt(['email' => $input['email'],'password' => $input['password']])) {
            $user  = Auth::user();
            // dd($user);

            $token = $user->createToken('MyApp')->accessToken;

            return response()->json(['token' => $token]);
        }	
	}
}
