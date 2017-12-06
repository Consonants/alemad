@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>Add a Banner</h1>
</section>

<section class="content">
   <div class="row">
    <div class="col-md-9">
      <div class="box">
         @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                          @endif
                    <form method="post" action="{{url('/user')}}" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        <P><input type="hidden" name="id" value="{{ $users->id }}"></P>
                        <P><input type="hidden" name="form" value="{{ $form_type }}"></P>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Select User Type</label>
                            <div class="col-sm-6">
                                {{ Form::select('role', ['' => 'Select User Type']+userrole(),$users['role'], array('class' => 'form-control')) }}                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $users->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Mobile</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" value="{{ $users->mobile }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="email" placeholder="Email id" value="{{ $users->email }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" name="psd">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Confirm Password</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" name="cpsd">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Image</label>
                            <div class="col-sm-6">
                                <input type="file" name="uploadpic" value="Choose files">
                            </div>
                        </div>          
                    <div class="form-group">  
                     <div class="col-sm-6 " id="submitarea" style="margin-left: 210px;"> 
                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
                        </div>
                    </div>                      
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection
