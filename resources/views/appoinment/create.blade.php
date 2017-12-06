@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>Appoinment</h1>
</section>

<section class="content">
   <div class="box box-default">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
         <div class="box-body">
          <div class="row">
            <form method="post" action="{{ url('/appoinment') }}" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Phone Number</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="email" placeholder="Email" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="editor1" rows="10" cols="50"></textarea>
                            </div>
                        </div>

                        <div class="form-group"><label for="inputcompanyname" class="col-sm-3 control-label">Deal Type</label>
                            <div class="col-sm-6">
                                {{ Form::select('dealtype', ['' => 'Select Car Type']+deal(),['dealtype'], array('class' => 'form-control')) }} 
                            </div> 
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Preferred Car</label>
                            <div class="col-sm-6">
                                {{ Form::select('carname', ['' => 'Select a Car'],['dealtype'], array('class' => 'form-control')) }}
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

</section>
<script type="text/javascript">
 $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')

     $('.select2').select2()
    //bootstrap WYSIHTML5 - text editor
   
  })   
</script>
 
@endsection