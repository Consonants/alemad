<?php

function userrole($key='')
{
	$user=array(
		'1'=>'Admin',
		'2'=>'Manager',
		'3'=>'Accountant',
		'4'=>'Sales Executive',
		);
	return (($key=='') ? $user : $user[$key]);
}

function design($key='')
{
	$user=array(
		'1'=>'Exterior Features',
		'2'=>'Interior Features',
		'3'=>'Security & Environment',		
		);
	return (($key=='') ? $user : $user[$key]);
}

function cartype($key='')
{
	$user=array(
		'1'=>'Rent',
		'2'=>'Sales',		
		);
	return (($key=='') ? $user : $user[$key]);
}

function carmake($key='')
{
	$carmake=DB::table('car_make')->where('status',1)->where('is_deleted',0)->select('company','id')->get();
    $list=array();
    foreach($carmake as $vehicle)
    {
        $list[$vehicle->id] = $vehicle->company;
    }
	return (($key=='') ? $list : $list[$key]);
}

function carcolor($key='')
{
	$colors=DB::table('colors')->where('status',1)->where('is_deleted',0)->select('name','id')->get();
    $list=array();
    foreach($colors as $color)
    {
        $list[$color->id] = $color->name;
    }
	return (($key=='') ? $list : $list[$key]);
}


function gear($key='')
{
	$user=array(
		'1'=>'Automatic',
		'2'=>'Manual',		
		);
	return (($key=='') ? $user : $user[$key]);
}

function bodytype($key='')
{
	$body=array(
		'1'=>'Hatchback',
		'2'=>'Sedan',
		'3'=>'MUV',
		'4'=>'SUV',
		'5'=>'Crossover',
		'6'=>'Coupe',
		'7'=>'Convertible',
		);
	return (($key=='') ? $body : $body[$key]);
}

function condition($key='')
{
   $condition=array(
		'1'=>'Used' ,
		'2'=>'New',		
		);
	return (($key=='') ? $condition : $condition[$key]);	
}

function features($type='')
{
	$feature=DB::table('features')->where('type',$type)->where('status',1)->select('id','name')->get();
	$group=array();
	foreach ($feature as $features) {
		$group[$features->id]= $features->name;
	}
	return $group;	
}

function cardetails($type='')
{
	$offer=DB::table('cardetails')->where('type',$type)->where('status',1)->select('id','offers')->get();
	$group=array();
	foreach ($offer as $cardetails) {
		$group[$cardetails->id]= $cardetails->offers;
	}
	return $group;	
}

function imagelink($imageid,$folder)
{
	$getdata=DB::table('images')->where('id',$imageid)->first();
	if(!empty($getdata))
	{
		$url= asset('images/'.$folder.'/'.$getdata->image);
	}
	else
		$url= asset('images/'.$folder.'/default.png');
	return $url;
}

function deal($key='')
{
	$user=array(
		'1'=>'Rent',
		'2'=>'Sale',		
		);
	return (($key=='') ? $user : $user[$key]);
}

function getmodel($modelid)
{
	$model=DB::table('car_model')->where('id',$modelid)->where('status',1)->first();
	if(!empty($model))
		return $model->model_name;
	else
		return '';
}

?>
