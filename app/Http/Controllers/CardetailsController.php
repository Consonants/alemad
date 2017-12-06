<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Session;
use App\Cardetails;
use App\image;


class CardetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = DB::table('cardetails')->get();
        return view('carinventory.details.index')->with('cardetails', $detail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $form_type = 'add';
        $user = new Cardetails;
        $type=$request->get('type');
        if(request()->ajax())
        {
            $type=$request->get('type');
            if($type=='1')
                $view = view('carinventory.details.rentform',['form_type'=>$form_type,'deal_type'=>$type,'users'=>$user])->render();
            else
                $view = view('carinventory.details.salesform',['form_type'=>$form_type,'deal_type'=>$type,'users'=>$user])->render();
            return response()->json(['status' => 'success', 'data' =>$view ]);
        }
        return view('carinventory.details.create')->with(['form_type'=>$form_type, 'users'=>$user,'type'=>$type,'id'=>'']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $this->carextras($request->all());
        $id = $request->get('id');
        $form = $request->get('form');
       if ($form == 'edit') {//edit form
            $rules = array(                
                'year' => 'required',
                'milleage' => 'required',
                'type' => 'required',
                'gearbox' => 'required',
                // 'condition' => 'required',
                // 'body' => 'required',
                // 'mechanic' => 'required',
                // 'specs' => 'required',                
                // 'details' => 'required',
            );

        } else{
            $rules = array(
                
                'year' => 'required',
                'milleage' => 'required',
                'type' => 'required',
                'gearbox' => 'required',
                // 'condition' => 'required',
                // 'body' => 'required',
                // 'mechanic' => 'required',
                // 'specs' => 'required',                
                // 'details' => 'required',
                );
        }
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('/details/create')
                            ->withErrors($validator)
                            ->withInput($request->all());
        }else{
            if ($form == 'edit') {//edit form
                $user = Cardetails::find($id);
                $user->make_id = $request->get('name');                
                $user->year = $request->get('year');
                $user->milleage = $request->get('milleage');
                $user->body_type = $request->get('bodytype');
                $user->gearbox = $request->get('gearbox');
                $user->color = $request->get('color');
                $user->price = $request->get('price');
                $user->body_condition = $request->get('condition');
                $user->body = $request->get('body');
                $user->mechanic = $request->get('mechanic');
                $user->specs = $request->get('specs');
                $user->interior = json_encode($request->get('interior'));
                $user->exterior = json_encode($request->get('exterior'));
                $user->security = json_encode($request->get('security'));            
                $user->details = $request->get('details');
                $user->type = $request->get('type');
               // $user->offers = $request->get('offer');
                $user->status = 1;
                $user->save();
                Session::flash('message', 'Successfully Updated!');
        }else{
         $user = new cardetails;
                // $user = Cardetails::find($id);
                $user->make_id      = $request->get('carmake');
                $user->model_id     = $request->get('model'); 
                $user->sub_model_id = $request->get('submodel');                
                $user->year         = $request->get('year');
                $user->milleage     = $request->get('milleage');
                $user->body_type    = $request->get('bodytype');
                $user->gearbox      = $request->get('gearbox');
                $user->price        = $request->get('price');
                $user->condition    = $request->get('condition');
                $user->body         = $request->get('body');
                $user->mechanic     = $request->get('mechanic');
                $user->specs        = $request->get('specs');           
                $user->interior     = json_encode($request->get('interior'));
                $user->exterior     = json_encode($request->get('exterior'));
                $user->security     = json_encode($request->get('security'));
                $user->details      = $request->get('details');
                $user->image        = $request->get('images');
                $user->type         = $request->get('type');
                $user->status = 1;
                //$user->save();
                if($user->save())
                {
                  $this->carextras($request->all(),$user->id,$request);
                  $this->carcolors($request,$user->id);
                  Session::flash('message', 'Create Successfully!');
                }
                
        }
        return redirect('/details');
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
        $user =cardetails::where('id',$id)->first();
        $type=$user->type;
        if($type=='1')
                 $user->join('car_extras','cardetails.id','=','car_extras.car_id')
                          ->join('rent_rates','cardetails.id','=','rent_rates.car_id');
                          
        if(request()->ajax())
        {
            
            if($type=='1')
                $view = view('carinventory.details.rentform',['form_type'=>$form_type,'deal_type'=>$type,'users'=>$user])->render();
            else
                $view = view('carinventory.details.salesform',['form_type'=>$form_type,'deal_type'=>$type,'users'=>$user])->render();
            return response()->json(['status' => 'success', 'data' =>$view ]);
        }
        return view('carinventory.details.create')->with(['form_type'=>$form_type,'users'=>$user,'type'=>$type,'id'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = cardetails::find($id);
        $user->delete();
        echo "HI";        
    }
    
    public function statusupdate(Request $request)
    {
        $id     = $request->get('id');
        $status = (($request->get('status')=='1') ? '0':'1');
        $returndata = (($request->get('status')=='1') ? 'Disable':'Enable');
        $statusupdate=DB::table('cardetails')->where('id',$id)->update(['status'=>$status]);
        return response()->json(['state' =>'success','message'=>'Status Updated Successfully','data'=>$returndata,'status'=>$status]);
    }

    public function carextras($data,$carid,$request) // offers to offer table
    {
      $popular=$offer=$banner=$economic=0;
      if(array_key_exists("popular",$data))
        $popular = ($data['popular']=='on') ? 1 : 0 ;
       if(array_key_exists("offer",$data))
        $offer   = ($data['offer']=='on')? 1 : 0;
       if(array_key_exists("banner",$data))
       {
        $banner  = ($data['banner']=='on')? 1 :0;
        $this->bannersave($request);
        $this->updaterentrates($request,$carid);
       }
       if(array_key_exists("economic",$data))
        $economic= ($data['economic']=='on')? 1: 0 ;
       DB::table('car_extras')->insert(['car_id'=>$carid,'banner'=>$banner,'popular'=>$popular,'best'=>$offer,'economic'=>$economic,'status'=>1]);
    }

    public function carcolors($request,$carid)
    {
        $intcolor   = $request->get('intcolor');
        $extcolor   = $request->get('extcolor');
        $form       = $request->get('form');
        if($form=='add')
            DB::table('car_colors')->insert(['car_id'=>$carid,'int_color'=>$intcolor,'ext_color'=>$extcolor,'status'=>1]);
        else if($form=='edit')
            DB::table('car_colors')->where('car_id',$carid)->update(['int_color'=>$intcolor,'ext_color'=>$extcolor]);
        else
            echo 'no operation';
    }

    public function bannersave($request)
    {
        $image       = $request->get('bannerimage');
        $description = $request->get('description');
        $align       = $request->get('align');
        DB::table('banners')->insert(['image'=>$image,'description'=>$description,'align'=>$align,'status'=>1]);
    }

    public function updaterentrates($request,$carid)
    {
        $dailyrate = $request->get('daily');
        $weekrate = $request->get('weekly');
        $monthrate  = $request->get('monthly');
        DB::table('rent_rates')->insert(['car_id'=>$carid,'daily_rent'=>$dailyrate,'monthly_rent'=>$monthrate,'weekly_rate'=>$weekrate,'status'=>1]);
    }

    public function dropzone(Request $request)
    {
        $files=$request->file('file');
        $no_of_files = count($files);
        $imagenames =array();
        foreach ($files as $file) {
            $rand = substr(md5(microtime()),rand(0,26),5);
            $imageName = $rand.'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/images/cargallery');
            $file->move($destinationPath, $imageName);
            $media             = new image;
            $media->image      = $imageName;
            $media->category   = 'car';
            $media->status     = 1;
            $media->save();
            $imagenames[]= $media->id;
        }
        return response()->json(['returnarray'=>$imagenames]);
    }
}
