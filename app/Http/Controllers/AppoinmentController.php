<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Session;
use App\Appoinment;

class AppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $detail = DB::table('appoinment')->get();
        return view('appoinment.index')->with('appoinment', $detail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form_type = 'add';
        $user = new Appoinment;
        return view('appoinment.create')->with(['form_type'=>$form_type, 'users'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->get('id');
        $form = $request->get('form');
       if ($form == 'edit') {//edit form
            $rules = array(                
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'carname' => 'required',
                'dealtype' => 'required',
                'classtype' => 'required',
                'leadtype' => 'required',
                
            );

        } else{
            $rules = array(
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'carname' => 'required',
                'dealtype' => 'required',
                'classtype' => 'required',
                'leadtype' => 'required',
                );
        }
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('/appoinment/create')
                            ->withErrors($validator)
                            ->withInput($request->all());
        }   
        else{
            if ($form == 'edit') {//edit form
                $user = Appoinment::find($id);
                $user->name = $request->get('name');                
                $user->phone = $request->get('phone');
                $user->email = $request->get('email');
                $user->car_name = $request->get('carname');
                $user->deal_type = $request->get('dealtype');
                $user->class_type = $request->get('type');
                $user->lead_type = $request->get('leadtype');                
                $user->status = 1;
                $user->save();
                Session::flash('message', 'Successfully Updated!');
        }else{
         $user = new appoinment;
                // $user = Cardetails::find($id);
               $user->name = $request->get('name');                
                $user->phone = $request->get('phone');
                $user->email = $request->get('email');
                $user->car_name = $request->get('carname');
                $user->deal_type = $request->get('dealtype');
                $user->class_type = $request->get('type');
                $user->lead_type = $request->get('leadtype');                
                $user->status = 1;
                $user->save();
                Session::flash('message', 'Create Successfully!');
                
        }
        return redirect('/appoinment');
    }
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
         $form_type = 'edit';
        $user =appoinment::find($id);
        return view('appoinment.create')->with(['form_type'=>$form_type, 'users'=>$user]);
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
        $user = appoinment::find($id);
        $user->delete();
        echo "HI";        
    }
    public function statusupdate(Request $request)
 {
        $id     = $request->get('id');
        $status = (($request->get('status')=='1') ? '0':'1');
        $returndata = (($request->get('status')=='1') ? 'Disable':'Enable');
        $statusupdate=DB::table('appoinment')->where('id',$id)->update(['status'=>$status]);
        return response()->json(['state' =>'success','message'=>'Status Updated Successfully','data'=>$returndata,'status'=>$status]);
 }
}
