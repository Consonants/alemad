<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MailController;

use DB,Auth,Redirect;
use Validator;
use App\user;
use Session;
use App\image;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        if(!Auth::check())
        {
            Redirect::to('/');
        }
        $this->mail=new MailController;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = DB::table('users')->get();
        return view('user.index')->with('users', $user);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form_type = 'add';
        $user = new user;
        return view('user.create')->with(['form_type'=>$form_type, 'users'=>$user]);
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
                'mobile' => 'required',
                'email' => 'required');

        } else{
            $rules = array(
                'name' => 'required',
                'mobile' => 'required',
                'email' => 'required',
                'uploadpic' => 'required',
                );
        }
       
       $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('user/create')
                            ->withErrors($validator)
                            ->withInput($request->all());
        }else{
            if ($form == 'edit') {//edit form
                $user = user::find($id);
                $user->name = $request->get('name');
                $user->mobile = $request->get('mobile');
                $user->email = $request->get('email');                
                $user->password = $request->get('psd');
                $user->role = $request->get('role');
                $user->status = 1;
                $user->save();
                Session::flash('message', 'Successfully Updated!');
        }else{
         $user = new user;
                // $banner->image = $name;
                $user->name = $request->get('name');
                $user->mobile = $request->get('mobile');
                $user->email = $request->get('email');                
                $user->password = bcrypt($request->get('psd')); 
                $user->role = $request->get('role');
                $user->status = 1;
                $user->save();
                $data=$request->all();
                $sendmail=$this->mail->sendmail('email.email', $data, 'Registration Confirmation');
                Session::flash('message', 'Create Successfully!');
                
        }
        if ($request->hasfile('uploadpic')) {
                $file = $request->file('uploadpic');                
                $name = time().'.'.$file->getClientOriginalName();
                $destinationPath = public_path('images/user');
                $file->move($destinationPath, $name);
                $image = new image;
                $image->image = $name;
                $image->category = "users"; 
                $image->status = 1;
                $image->save();
                DB::table('users')->where('id', $user->id)->update(['image'=>$image->id]);
            }
        return redirect('/user');
    }
       }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form_type = 'edit';
        $user =user::find($id);
        return view('user.create')->with(['form_type'=>$form_type, 'users'=>$user]);
    }

     public function destroy($id) {
        $user = user::find($id);
        $user->delete();
        $user->is_delete = 1;
       echo "HI";
      // return redirect('/user');
   }

      public function statusupdate(Request $request)
 {
        $id     = $request->get('id');
        $status = (($request->get('status')=='1') ? '0':'1');
        $returndata = (($request->get('status')=='1') ? 'Disable':'Enable');
        $statusupdate=DB::table('users')->where('id',$id)->update(['status'=>$status]);
        return response()->json(['state' =>'success','message'=>'Status Updated Successfully','data'=>$returndata,'status'=>$status]);
 }
}
