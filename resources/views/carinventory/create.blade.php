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
                    <form method="post" action="{{url('/carfeatures')}}" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        <P><input type="hidden" name="id" value=""></P>
                        <P><input type="hidden" name="form" value=""></P>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Description_1</label>
                            <div class="col-sm-6">
                                <textarea name="description_1" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Description_2</label>
                            <div class="col-sm-6">
                                <textarea name="description_2" cols="30" rows="5"></textarea>
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
