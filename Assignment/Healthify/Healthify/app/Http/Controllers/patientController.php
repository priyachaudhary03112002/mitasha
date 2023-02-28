<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\appointment;
use App\Models\patient;
use App\Models\doctor;
use Hash;
use Alert;
use session;


class patientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctor=doctor::all();	  // select * from
        return view('frontend.index',['fetch'=>$doctor]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function appointment(Request $request)
    {
        $data=new appointment;
		$data->name=$request->name;
        $data->age=$request->age;
        $data->address=$request->address;
        $data->mobile=$request->mobile;
        $data->date=$request->date;
        $data->city=$request->city;
        $data->doctor_name=$request->doctor_name;
        $data->description=$request->description;
        $data->degree=$request->degree;
        $data->day_time=$request->day_time;
        $media=$request->file('media');		
		$imgname=time().'media.'.$request->file('media')->getClientOriginalExtension();
		$media->move('frontend/assets/images/upload/',$imgname);  
		$data->media=$imgname; 
        $data->save();
        Alert::success('success', 'appointment Success');
		return back();
    }

    public function patient_register(Request $request)
    {
        $data=new patient;
		$data->name=$request->name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);

        $data->save();
        Alert::success('success', 'patient Success');
		return back();
    }

    public function patient_login(Request $request)
    {
        $email=$request->email;
        $data=patient::where('email','=',$email)->first();
        if($data)  
        {
        $chk=Hash::check($request->password,$data->password);
        if($chk)
        {
              session()->put('id',$data->id);
              session()->put('name',$data->name);
              session()->put('email',$data->email);
              Alert::success('Congrats', 'You\'ve Successfully Login');
              
              return redirect('/index');
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

    public function logout()
	{
		session()->pull('id');
		session()->pull('name');
		session()->pull('email');
		return redirect('/index');
	}
    /**
     * Display the specified resource.
     */

    public function doctor()
    {
        $doctor=doctor::all();	  // select * from
       return view('frontend.doctor',['data'=>$doctor]);
    }
   
    public function profile()
    {
        $data=patient::where("id",'=',session('id'))->first();
		return view('frontend.profile',['data'=>$data]);
    }
    public function edit_profile($id)
    {
        $data=patient::where("id",'=',$id)->first();
		return view('frontend.edit_profile',['fetch'=>$data]);
    }

    public function update_profile(Request $request,$id)
    {
        $data=patient::find($id);
		$data->name=$request->name;
        $data->email=$request->email;
		
		
		$data->update();
		Alert::success('success', 'Update Success');
		return redirect('/profile');
    
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
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
