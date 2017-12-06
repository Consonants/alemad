<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Session;
use App\Carfeatures;

class CarfeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feature = DB::table('features')->simplePaginate(10);
        return view('carinventory.features.index')->with('features', $feature);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form_type = 'add';
        $user = new Carfeatures;
        return view('carinventory.features.create')->with(['form_type'=>$form_type, 'users'=>$user]);
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
                'type' => 'required',               
                );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // return redirect('/carfeatures/create')
            //                 ->withErrors($validator)
            //                 ->withInput($request->all());
            return response()->json(['status' => 'fails', 'data' =>$validator->errors() ]);exit;
        }else{
            if ($form == 'edit')//edit form 
            {
                $user = Carfeatures::find($id);
            }
            else
            {
                $user = new Carfeatures;
            }   
            $user->name = $request->get('name');
            $user->type = $request->get('type');
            $user->status = 1;
  

            if($user->save())
            {    return response()->json(['status' => 'success', 'data' =>"Data successfully saved" ]);exit; }
            else
            {    return response()->json(['status' => 'fails', 'data' =>"Problem in saving data" ]);exit; }              
                                
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
        $items =carfeatures::find($id);
        if(request()->ajax())
        {
            return response()->json(['status' => 'success', 'data' =>$items ,'form_type'=>$form_type ]);
        } 
        //return view('carinventory.features.create')->with(['form_type'=>$form_type, 'users'=>$user]);
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
        $user = carfeatures::find($id);
        $user->delete();
        echo "HI";        
    }
    public function statusupdate(Request $request)
 {
        $id     = $request->get('id');
        $status = (($request->get('status')=='1') ? '0':'1');
        $returndata = (($request->get('status')=='1') ? 'Disable':'Enable');
        $statusupdate=DB::table('features')->where('id',$id)->update(['status'=>$status]);
        return response()->json(['state' =>'success','message'=>'Status Updated Successfully','data'=>$returndata,'status'=>$status]);
 }
}
