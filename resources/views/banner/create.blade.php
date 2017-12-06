@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>Add a Banner</h1>
</section>

<section class="content">
<div class="box box-default">
   <div class="box-body">
          <div class="row">
         @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                          @endif
                    <form method="post" action="{{url('/banner')}}" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        <P><input type="hidden" name="id" value="{{ $banners->id}}"></P>
                        <P><input type="hidden" name="form" value="{{ $form_type}}"></P>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Image</label>
                            <div class="col-sm-6">
                                <input type="file" name="uploadpic" value="Choose files">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Description_1</label>
                            <div class="col-sm-6">
                                <textarea name="description_1" cols="30" rows="5">{{ $banners->description_1}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Description_2</label>
                            <div class="col-sm-6">
                                <textarea name="description_2" cols="30" rows="5">{{ $banners->description_2}}</textarea>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Offers</label>
                            <div class="col-sm-6">
                                {{ Form::select('offer',cardetails(),$banners['offer'], array('class' => 'form-control select2','multiple'=>'multiple')) }}                                
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Align</label>
                            <div class="col-sm-6">
                                <input type="radio" name="align" value="left" @if(($banners->align)=='left') checked @endif> Left 
                                <input type="radio" name="align" value="right" @if(($banners->align)=='right') checked @endif> Right
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
