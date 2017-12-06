@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>Add Car Features</h1>
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
                    <form method="post" action="{{url('/carfeatures')}}" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        <P><input type="hidden" name="id" value="{{ $users->id }}"></P>
                        <P><input type="hidden" name="form" value="{{ $form_type }}"></P>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $users->name }}">
                            </div>
                        </div>                    
                    <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Car Features</label>
                            <div class="col-sm-6">
                                {{ Form::select('type', ['' => 'Select User Type']+design(),$users['type'], array('class' => 'form-control')) }}                                
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
