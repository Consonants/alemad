<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Auth,Redirect,Validator;
use App\Carmake;

class CarmakeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        if(!Auth::check())
        {
            Redirect::to('/');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = DB::table('car_make')->simplePaginate(10);
        return view('carinventory.makeindex')->with('carmake', $car);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $id = $request->get('id');
        $form = $request->get('form');
        $rules = array(
                'name' => 'required',                
                );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
                return response()->json(['status' => 'fails' , 'data'=> $validator->error()]);exit;
        }else{
            
            if ($form == 'edit') 
            {//edit form
                $user = Carmake::find($id);                
            }else{
                $user = new Carmake;                
            }
            $user->company = $request->get('name');
            $user->status = 1;                
                
            if($user->save())
            {
                return response()->json(['status' => 'success' , 'data'=>'Data Successfully Saved']);exit;
            }
            else
            {
                return response()->json(['status' => 'success' , 'data'=>'Failed to Saved']);exit;
            }
        }
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
        $user =Carmake::find($id);
        if(request()->ajax())
        {
        return response()->json(['status' => 'success' , 'data'=>$user , 'form_type'=>$form_type]);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Carmake::find($id);
        $user->is_deleted ='1';
        $user->save();
        echo "HI";     
    }

    public function statusupdate(Request $request)
    {
        $id     = $request->get('id');
        $status = (($request->get('status')=='1') ? '0':'1');
        $returndata = (($request->get('status')=='1') ? 'Disable':'Enable');
        $statusupdate=DB::table('car_make')->where('id',$id)->update(['status'=>$status]);
        return response()->json(['state' =>'success','message'=>'Status Updated Successfully','data'=>$returndata,'status'=>$status]);
    }
}
