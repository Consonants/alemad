@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>Features
        <small>List of a Features</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Features</li>
      </ol>
</section>
 <!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            @if(session()->has('message'))
              <div class="alert alert-success">
                {{ session()->get('message') }}
              </div>
            @endif
             <div class="box-header with-border">
              <h1 class="box-title">Car Features</h1>
                <div class="btn-group header-right" style="float: right;">
                <!-- <a href="{{ url('carfeatures/create') }}" style="font-weight: bold; color: white;"> -->
                <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#carfeatures" id="addemail" data-backdrop="static" data-keyboard="false" id="addnew">Add New</button>
            <!-- </a> -->
              </div>
             </div>
                      
            <!-- /.box-header -->
            <div class="box-body">
              <table id="users_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                            <th>Name</th>
                            <th>Type</th>                            
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($features as $user)
                        <tr>
                           <td>{{$user-> name}}</td>
                           <td>{{ design($user->type) }} </td>
                           <td><input type="checkbox" class="toggle-trigger" data-on="Enable" data-off="Disable" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-id="{{ $user->id }}" data-status="{{ $user->status }}" data-url ="{{ url('status/carfeatures') }}" {{ ($user->status == '1') ? 'checked' : '' }} ></td>
                           <td>
                            <i class="fa fa-edit fa-2x editfeatures" data-url="{{ url('carfeatures/'.$user->id.'/edit') }}"></i><i id="delete" class="fa fa-trash fa-2x delete" data-url="{{ url('carfeatures/'.$user->id) }}"></i></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{ $features->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="carfeatures">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
              <h4 class="modal-title">Add Feature Details</h4>
            </div>
            <div class="modal-body">
             {!! Form::open(array('method'=>'post','id'=>'featuresform','class'=>'form-horizontal','autocomplete'=>'off','novalidate'=>'novalidate')) !!}
             
              <div class="form-group">
                  {!! Form::hidden('form','',array('id'=>'formtype','id'=>'formtype')) !!}
                  {!! Form::hidden('id','',array('class'=>'form-control','id'=>'itemid')) !!}
              </div>
                                
              <div class="form-group">
                <label for="inputcontactperson" class="col-sm-3 control-label">Feature</label>
                <div class="col-sm-6">
                    {!! Form::text('name',null,array('class'=>'form-control','placeholder'=>'Enter a Feature','id'=>'name')) !!}
                </div>
              </div>

              <div class="form-group">
                <label for="inputcompanyname" class="col-sm-3 control-label">Car Features</label>
                  <div class="col-sm-6">
                    {{ Form::select('type', ['' => 'Select Feature Type']+design(),'', array('class' => 'form-control','id'=>'type')) }}                                
                   </div>
               </div>
             
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="btn-save">Save changes</button>
                <button type="button" class="btn btn-danger cancel" data-dismiss="modal">cancel</button>
                {!! Form::close() !!}
            </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div> 
</section>
<script>
$("#featuresform").validate({
      rules: {
        name: {
          required: true,
          },
        type: {
          required: true,
        },        
      },
      messages: {
        name: {
          required: "Please Enter a Feature",
        },
        type: {
          required: "Please Select a Feature Type",
        },
      },
      submitHandler: function(form) {
          $.ajax({
              type: "POST",
              url: "{{ url('/carfeatures') }}",
              data: $(form).serialize(),
              success: function(res) {
                  if(res.status=='success')
                  {
                     toastr.success(res.data);
                     window.location.reload();
                  }
                  else
                     toastr.warning(res.data); 
              },
              error: function() {
                  toastr.warning('failed');
              }
          });
        return false;
      }
 });
$(document).on('click','.cancel',function(){
  $('#featuresform').trigger("reset");
 });
 $(document).on('click','.editfeatures',function(){
    $('#carfeatures').modal('show');
  var url=$(this).attr('data-url');
    $.ajax({
            url: url,
            type: "get",
            dataType: "json",
            success: function (res)
            {
              $('#formtype').val(res.form_type);
              $('#itemid').val(res.data.id);
              $('#name').val(res.data.name);
              $('#type').val(res.data.type);
              $('#carfeatures').modal('show');
            },
            error: function()
            {
                toastr.error('Failed');
            },
    });
});
</script>
  <!-- <script type="text/javascript">
 $(document).on('click','.status',function(){                            
    var url=$(this).attr('data-url');
    var id=$(this).attr('data-id');
    var status=$(this).attr('data-status');
    var element=$(this);
  
          $.ajax({
            url: url,
            type: "get",
            async: true,
            dataType: "json",
            data:{'id':id,'status':status},
            success: function (res)
            {
                element.attr('id',res.data);
                element.val(res.data);
                element.attr('data-status',res.status);
                // toastr.success(res.message);   
            },
            error: function()
            {
                toastr.error('Failed to Update Status');
            },
          });
          
});
 $(document).on('click','.delete',function(){                           
    var url=$(this).attr('data-url');
    if(confirm("Are you sure want to delete")){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          $.ajax({
            url: url,
            type: "delete",
            dataType: "text",
           
            success: function (res)
            {
                toastr.success('Deleted Successfully');
                window.location.reload();

            },
            error: function()
            {
                toastr.error('Failed to Delete');
            },
          });
      }
          
});
</script> -->
@endsection
