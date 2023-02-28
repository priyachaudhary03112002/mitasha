<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\doctor;
use App\Models\appointment;
use App\Mail\welcomemail;
use Mail;
use Hash;
use Alert;



class doctorController extends Controller
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

    /**
     * Store a newly created resource in storage.
     */
    public function register_doc(Request $request)
    {
        $data=new doctor;
		$data->name=$request->name;
        $email=$data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->address=$request->address;
        $data->mobile=$request->mobile;
        $data->description=$request->description;
        $data->degree=$request->degree;
        $data->city=$request->city;

        $img=$request->file('img');		
		$imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
		$img->move('backend/assets/img/upload/',$imgname);  
		$data->img=$imgname;

        $data->save(); 
        $data=['msg'=>"Registration Success",'sub'=>"hospital Website"];
        Mail::to($email)->send(new welcomemail($data));
        Alert::success('success', 'doctor Success');
		return back();
    }

    public function login(Request $request)
    {
        $email=$request->email;
        $data=doctor::where('email','=',$email)->first();
        if($data)  
        {
        $chk=Hash::check($request->password,$data->password);
        if($chk)
        {
              session()->put('id',$data->id);
              session()->put('name',$data->name);
              session()->put('email',$data->email);
              Alert::success('Congrats', 'You\'ve Successfully Login');
              
              return redirect('/dashboard');
        }
        else
        {
          Alert::error('Login Failed', 'Wrong Password');
          return redirect()->back();
        }
        }
        else
                {
                    Alert::error('Login Failed', 'Wrong Email');
                    return redirect()->back();
                }
     
    }

    public function logout1()
	{
		session()->pull('id');
		session()->pull('name');
		session()->pull('email');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/login_doctor');
	}


      /**  
     * Display the specified resource.
     */
    public function manage(Request $request)
    {
        $appointment=appointment::all();
        return view('backend.manage_appointment',['patient'=>$appointment]);
    }

    public function manage_doctor(Request $request)
    {
        $appointment=appointment::all();
        return view('backend.book_appointment',['doctor'=>$appointment]);
    }
    public function other_doctor(Request $request)
    {
        $doctor=doctor::all();
        return view('backend.other_doctor',['data'=>$doctor]);
    }

    public function all_doctor(Request $request)
    {
        $doctor=doctor::all();
        return view('backend.all_doctor',['fetch'=>$doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       
        $data=appointment::where("id",'=',$id)->first();
		return view('backend.edit_app',['fetch'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data=appointment::find($id);
		$data->name=$request->name;
        $data->age=$request->age;
        $data->address=$request->address;
        $data->mobile=$request->mobile;
        $data->date=$request->date;
        $data->city=$request->city;

        $media=$request->file('media');		
		$imgname=time().'media.'.$request->file('media')->getClientOriginalExtension();
		$media->move('frontend/assets/images/upload/',$imgname);  
		$data->media=$imgname; 
		$data->update();
		Alert::success('success', 'Update Success');
		return redirect('/manage_appointment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=appointment::find($id);
		$data->delete();
		Alert::success('success', 'Delete Success');
		return back();
    }
}
