@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>Colors
        <small>List of a Colors</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Colors</li>
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
              <h1 class="box-title">Car Colors</h1>
                <div class="btn-group header-right" style="float: right;">                
                <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#colors" id="addemail" data-backdrop="static" data-keyboard="false" id="addnew">Add New</button>
            <!-- </a> -->
              </div>
             </div>
                      
            <!-- /.box-header -->
            <div class="box-body">
              <table id="users_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                            <th>Name</th>                                                       
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($colors as $user)
                        <tr>
                           <td>{{$user-> name}}</td>
                           <td><input type="checkbox" class="toggle-trigger" data-on="Enable" data-off="Disable" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-id="{{ $user->id }}" data-status="{{ $user->status }}" data-url ="{{ url('status/color') }}" {{ ($user->status == '1') ? 'checked' : '' }} ></td>
                           <td>
                            <i class="fa fa-edit fa-2x editfeatures" data-url="{{ url('color/'.$user->id.'/edit') }}"></i><i id="delete" class="fa fa-trash fa-2x delete" data-url="{{ url('color/'.$user->id) }}"></i></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{ $colors->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="colors">
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
                <label for="inputcontactperson" class="col-sm-3 control-label">Color</label>
                <div class="col-sm-6">
                    {!! Form::text('name',null,array('class'=>'form-control','placeholder'=>'Enter a Color','id'=>'name')) !!}
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
              url: "{{ url('/color') }}",
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
    $('#colors').modal('show');
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
              $('#color').modal('show');
            },
            error: function()
            {
                toastr.error('Failed');
            },
    });
});
</script>
@endsection
