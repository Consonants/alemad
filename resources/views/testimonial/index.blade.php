@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>Testimonials
        <small>List of a Testimonial</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Testimonial</li>
      </ol> 
</section>
 <!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">Testimonial</h1>
            <!-- <div class="btn-group header-right" style="float: right;">
                <button type="button" class="btn btn-block btn-primary btn-sm" id="addnew"><a href="{{url('banner/create')}}" style="font-weight: bold; color: white;">Add New</a></button>
            </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="users_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
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
  <script type="text/javascript">
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
</script>
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
