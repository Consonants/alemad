<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB,Session;
use App\banner;
use App\image;

class Bannercontroller extends Controller {

    public function index() {
        $banner = DB::table('banners')->get();
        return view('banner.index')->with('banners', $banner);
    }

    public function create() {
        $form_type = 'add';
        $banner=new banner;
        //echo '<pre>';print_r($banner); exit;
        return view('banner.create')->with(['form_type'=>$form_type, 'banners'=>$banner]);
    }

    public function store(Request $request) {
        $id = $request->get('id');
        $form = $request->get('form');
        if ($form == 'edit') {//edit form
            $rules = array(                
                'description' => 'required',
                'align' => 'required');

        } else {
            $rules = array(
                'description' => 'required',
                'align' => 'required');
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('banner/create')
                            ->withErrors($validator)
                            ->withInput($request->all());
        } else {
           
            if ($form == 'edit') {//edit form
                $banner = banner::find($id);
                // $banner->image = $request->get('uploadpic');
                $banner->description_1 = $request->get('description_1');
                $banner->description_2 = $request->get('description_2');
                $banner->align = $request->get('align');
                $banner->status = 1;
                $banner->save();
                Session::flash('message', 'Successfully Updated!');
//                DB::table('slider')->where('id', $id)->update(['banner_title' => $request->get('title'), 'banner_describtion' => $request->get('description'), 'status' => 1]);
            } else {
                $banner = new banner;
                // $banner->image = $name;
                $banner->description_1 = $request->get('description_1');
                $banner->description_2 = $request->get('description_2');
                $banner->align = $request->get('align');                
                $banner->status = 1;
                $banner->save();
                Session::flash('message', 'Create Successfully!');
//                DB::table('slider')->insert(['banner_title' => $request->get('title'), 'banner_describtion' => $request->get('description'), 'image' => $name, 'status' => 1]);
            }
             if ($request->hasfile('uploadpic')) {
                $file = $request->file('uploadpic');
                $name = $file->getClientOriginalName();
                $file->move(public_path('images/banner'), $name);
                $banner = banner::find($banner->id);
                $banner->image=$name;
                $banner->save();
            }
            return redirect('/banner');
        }
    }

    public function edit($id) {
         $form_type = 'edit';
        $banner = DB::table('banners')->where('id',$id)->first();
        return view('banner.create')->with(['form_type'=>$form_type, 'banners'=>$banner]);
    }

    public function delete($id) {
        $banner = banner::find($id);
        $banner->delete();
        Session::flash('message', 'Successfully Deleted!');
       return redirect('/banner');
    }

    public function statusupdate(Request $request)
    {
        $id     = $request->get('id');
        $status = (($request->get('status')=='1') ? '0':'1');
        $returndata = (($request->get('status')=='1') ? 'Disable':'Enable');
        $statusupdate=DB::table('banners')->where('id',$id)->update(['status'=>$status]);
        return response()->json(['state' =>'success','message'=>'Status Updated Successfully','data'=>$returndata,'status'=>$status]);
    }

    public function savebannerimage(Request $request)
    {
        $file=$request->file('file');
        $imageName = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/images/banner');
        $file->move($destinationPath, $imageName);
        $media             = new image;
        $media->image      = $imageName;
        $media->category   = 'banner';
        $media->status     = 1;
        $media->save();
        return response()->json(['success'=>$imageName,'imageid'=>$media->id]);
    }

}
