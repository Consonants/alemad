@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
        Cars
        <small>List of a Cars</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Cars</li>
      </ol>
</section>
<!-- Main content -->
<section class="content">
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
             <h1 class="box-title">Car Details</h1>
             <div class="btn-group header-right" style="float: right;">
               <a href="{{ url('details/create') }}" class="btn btn-block btn-primary btn-sm" role="button" style="font-weight: bold; color: white;">Add New</a>
             </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="users_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Name</th>
                      <th>Year</th>
                      <th>Milleage</th>
                      <th>Body Type</th>
                      <th>Gearbox</th>
                      <th>Body Condition</th>                            
                      <th>Type</th>
                      <th>Status</th>
                      <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cardetails as $user)
                    <tr>                            
                            <td>{{ carmake($user->make_id) }} {{ getmodel($user->model_id) }} {{ getmodel($user->sub_model_id) }}</td>
                            <td>{{$user-> year}}</td>
                            <td>{{$user-> milleage}} Kmph</td>
                            <td>{{ bodytype($user->body_type) }}</td>
                            <td>{{ gear($user->gearbox)}}</td>
                            <td>{{ condition($user->condition) }}</td>
                            <td>{{ cartype($user->type)}}</td>
                                                      
                            <td>
                                <input type="checkbox" class="toggle-trigger" data-on="Enable" data-off="Disable" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-id="{{ $user->id }}" data-status="{{ $user->status }}" data-url ="{{ url('status/details') }}" {{ ($user->status == '1') ? 'checked' : '' }} >
                            </td>
                            <td><a href="{{url('details/'.$user->id.'/edit')}}" title="edit"><i class="fa fa-edit fa-2x"></i></a></td>
                            <td><i id="delete" class="fa fa-trash fa-2x delete" data-url="javascript:void(0)"></i></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}                        
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
 
                    <style>
                        #Enable{
                            background-color: green;
                        }
                        #Disable{
                            background-color: red;  
                        }
                        .status{
                         color: black;

                        }
                    </style>
@endsection
