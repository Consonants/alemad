<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Auth,Redirect,Validator;
use App\Carmodel;

class CarmodelController extends Controller
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
        $carmodel = DB::table('car_model')->join('car_make','car_model.make_id','=','car_make.id')->where('model_id',0)
                    ->where('car_model.is_deleted',0)->select('car_make.company','car_model.*')->simplePaginate(10);
        return view('carsettings.modelindex')->with('carmodel', $carmodel);
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
                'make' => 'required',
                'name' => 'required',                
                );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
                return response()->json(['status' => 'fails' , 'data'=> $validator->error()]);exit;
        }else{
            
            if ($form == 'edit') 
            {//edit form
                $user = Carmodel::find($id);                
            }else{
                $user = new Carmodel;                
            }
            $user->make_id    = $request->get('make');
            $user->model_name = $request->get('name');
            $user->status     = 1;                
                
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $user =Carmodel::find($id);
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
        $user = Carmodel::find($id);
        $user->is_deleted ='1';
        $user->save();
        echo "HI";
    }

    public function statusupdate(Request $request)
    {
        $id     = $request->get('id');
        $status = (($request->get('status')=='1') ? '0':'1');
        $returndata = (($request->get('status')=='1') ? 'Disable':'Enable');
        $statusupdate=DB::table('car_model')->where('id',$id)->update(['status'=>$status]);
        return response()->json(['state' =>'success','message'=>'Status Updated Successfully','data'=>$returndata,'status'=>$status]);
    }

    // public function checkmodel(Request $request)
    // {
    //     $make_id =$request->get('make');
    //     $model   = Carmodel::where('make_id',$make_id)->where('model_id','=',0)->where('status',1)->pluck('model_name','id');
    //     return json_encode($model);

    // }

    public function getmodel(Request $request) // Model for a make
    {
        $makeid  = $request->get('make');
        $model   = Carmodel::where('make_id',$makeid)->where('model_id',0)->where('status',1)->select('model_name','id')->get();
        $group=array();
        foreach($model as $mod)
        {
            $group[$mod->id] = $mod->model_name;
        }
        return $group;
    }

    public function getsubmodel(Request $request) // Sub Model for a make,model
    {
        $makeid  = $request->get('make');
        $modelid = $request->get('model');
        $submodel   = Carmodel::where('make_id',$makeid)->where('model_id',$modelid)->where('status',1)->select('model_name','id')->get();
        $group=array();
        foreach($submodel as $mod)
        {
            $group[$mod->id] = $mod->model_name;
        }
        return $group;
    }
}
