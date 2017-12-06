@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>Banner
        <small>List of a Banner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Banner</li>
      </ol> 
</section>
 <!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">Banner</h1>
            <!-- <div class="btn-group header-right" style="float: right;">
                <button type="button" class="btn btn-block btn-primary btn-sm" id="addnew"><a href="{{url('banner/create')}}" style="font-weight: bold; color: white;">Add New</a></button>
            </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="users_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Align</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($banners as $banner)
                        <tr>
                            <td><img src="{{ imagelink($banner->image,'banner') }}" width="50px" height="50px"></td>
                            <td>{{$banner->description}}</td>
                            <td>{{$banner->align}}</td>                          
                            <td><input type="button" class="btn status" id="{{ ($banner->status == '1') ? 'Enable' : 'Disable' }}" value="{{ ($banner->status == '1') ? 'Enable' : 'Disable' }}" data-id="{{ $banner->id }}" data-status="{{ $banner->status }}" data-url ="{{ url('status/banner') }}"></td>
                            <td><i class="fa fa-edit fa-2x"><a href="{{ url('banner') }}" title="edit"></a></i><a href="javascript:void(0)" title="delete"><i class="fa fa-trash fa-2x"></i></a></td>
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
