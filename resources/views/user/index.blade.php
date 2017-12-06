@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <div class="row">
         <div class="col-md-12">
            @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
             <div class="box-header with-border">
              <h1 class="box-title">Add a User</h1>              
            <div class="btn-group header-right" style="float: right;">
                <button type="button" class="btn btn-block btn-primary btn-sm" id="addnew"><a href="{{url('user/create')}}" style="font-weight: bold; color: white;">Add New</a></button>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="users_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email Id</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td><img src="{{ imagelink($user->image,'user') }}" width="50px" height="50px"></td>
                            <td>{{$user-> name}}</td>
                            <td>{{$user->mobile}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{ userrole($user->role) }} </td>
                            <td><input type="checkbox" class="toggle-trigger" data-on="Enable" data-off="Disable" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-id="{{ $user->id }}" data-status="{{ $user->status }}" data-url ="{{ url('status/user') }}" {{ ($user->status == '1') ? 'checked' : '' }} ></td>
                            <td><a href="{{ url('user/'.$user->id.'/edit') }}" title="edit"><i class="fa fa-edit fa-2x"></i></a></td>
                            <td><i id="delete" class="fa fa-trash fa-2x delete" data-url="{{ url('user/'.$user->id) }}"></i></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    

                </div>
            </div>
        </div>
    </div>
</div>
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
