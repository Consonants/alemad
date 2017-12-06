<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Alemad') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('css/ionicons/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset ('plugins/iCheck/square/blue.css') }}">
  <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css')}}">  
    <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('select2/dist/css/select2.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('plugins/morris.js/morris.css')}}">
  <link rel="stylesheet" href="{{ asset('css/sweetalert.css')}}">
  <!-- <link rel="stylesheet" href="{{ asset('css/basic.min.css')}}"> -->
  <link rel="stylesheet" href="{{ asset('css/dropzone.css')}}">

  <link rel="stylesheet" href="{{ asset('css/bootstraptogglemaster/bootstrap-toggle.min.css')}}">
    <!-- Google Font -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


 <!-- jQuery 3 -->
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('js/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('js/fastclick/fastclick.js') }}"></script>
<script src="{{ asset('js/dropzone.js') }}"></script>
<!-- CK Editor -->
<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('toastr/toastr.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('select2/dist/js/select2.full.min.js') }}"></script>
<!-- Validator-->
<script src="{{ asset('plugins/jquery-validator/dist/jquery.validate.js') }}"></script>
<script src="{{ asset('plugins/jquery-validator/dist/additional-methods.min.js') }}"></script>
<!-- iCheck-->
<script type="text/javascript" src="{{ asset('plugins/iCheck/icheck.min.js')}}"></script>
<!-- Chart -->
<script src="{{ asset('plugins/morris.js/morris.min.js')}}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/sweetalert-dev.js') }}"></script>
<script src="{{ asset('js/bootstraptogglemaster/bootstrap-toggle.min.js') }}"></script>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <header class="main-header">

                <!-- Logo -->
      <a href="{{ url('/dashboard')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="" width="40px" height="50px" alt="AM"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="{{ asset('images/logo.png') }}" height="50px" width="200px" alt="AL EMAD"></span>
      </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a href="javascript::void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="javascript::void(0)">
                                                    <div class="pull-left">
                                                        <img src="{{ asset('/images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <li>
                                                <a href="javascript::void(0)">
                                                    <div class="pull-left">
                                                        <img src="{{ asset('images/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript::void(0)">
                                                    <div class="pull-left">
                                                        <img src="{{asset('images/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript::void(0)">
                                                    <div class="pull-left">
                                                        <img src="{{ asset('images/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript::void(0)">
                                                    <div class="pull-left">
                                                        <img src="{{ asset('images/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="javascript::void(0)">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="javascript::void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="javascript::void(0)">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript::void(0)">
                                                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                                    page and may cause design problems
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript::void(0)">
                                                    <i class="fa fa-users text-red"></i> 5 new members joined
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript::void(0)">
                                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript::void(0)">
                                                    <i class="fa fa-user text-red"></i> You changed your username
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="javascript::void(0)">View all</a></li>
                                </ul>
                            </li>

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="javascript::void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('images/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="{{ asset('images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                                        <p>
                                            {{ Auth::user()->name }} - {{ userrole(Auth::user()->role) }} 
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!-- <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                        <!-- /.row 
                                    </li>  -->
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="javascript::void(0)" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="{{ route('logout') }}" 
                                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
<!--                             Control Sidebar Toggle Button 
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>-->
                        </ul>
                    </div>

                </nav>
            </header>
  
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('images/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       <li class="header">MAIN NAVIGATION</li>
       <li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

       @if((Auth::user()->role)==1 || (Auth::user()->role)==2)
                
        <li><a href="{{ url('banner') }}"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Banner</span></a></li>
        
        <li><a href="{{ url('testimonials') }}"><i class="fa fa-quote-left" aria-hidden="true"></i> <span>Testimonials</span></a></li>
        
        <li><a href="javascript:void(0)"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
        
         <li class="treeview">
          <a href="javascript:void(0)">
            <i class="fa fa-car"></i> <span>Car Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('carfeatures') }}"><i class="fa fa-angle-right"> </i>Features</a></li>
            <li><a href="{{ url('color') }}"><i class="fa fa-angle-right"></i>Color</a></li>
            <li><a href="{{ url('carmake') }}"><i class="fa fa-angle-right"></i>Car Make</a></li>
            <li><a href="{{ url('model') }}"><i class="fa fa-angle-right"></i>Model</a></li>
            <li><a href="{{ url('submodel') }}"><i class="fa fa-angle-right"></i>Sub Model</a></li>
          </ul>
        </li>
        <li><a href="{{ url('details') }}"><i class="fa fa-edit"></i> <span>Car Inventory</span></a></li>
        <li><a href="{{ url('user') }}"><i class="fa fa-users"></i> <span>Users</span></a></li> 

        @elseif((Auth::user()->role)==3)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Appointments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/appoinment') }}"><i class="fa fa-angle-right"></i> View</a></li>
            <li class="active"><a href="#"><i class="fa fa-angle-right"></i> Calculate </a></li>            
          </ul>
        </li>
         <li><a href="#"><i class="fa fa-th"></i> <span>Report</span></a></li>
                  
        @elseif((Auth::user()->role)==4)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-thumbs-up"></i> <span>Appointments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/appoinment/create') }}"><i class="fa fa-angle-right"></i> Add a Lead</a></li>
            <li class="active"><a href="{{ url('/appoinment') }}"><i class="fa fa-angle-right"></i> View Leads</a></li>
          </ul>
        </li>
         <li><a href="#"><i class="fa fa-th"></i> <span>Report</span></a></li>
      </ul>
      @endif
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  
    <!-- Main content -->
<div class="content-wrapper">
  
  @yield('content')

</div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Made with <i class="fa fa-heart" aria-hidden="true" style="color:red"></i> by Consonants
    </div>
    <strong>Copyright &copy; 2017 <a href="{{ url('/')}}">Alemad</a>.</strong> All rights
    reserved.
  </footer>

 <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
</body>
<!-- ./wrapper -->


<!-- page script -->
<script type="text/javascript">
  /** add active class and stay opened when selected */ 
var url = window.location; // for sidebar menu entirely but not cover treeview 
$('ul.sidebar-menu a').filter(function() { return this.href == url; }).parent().addClass('active'); // for treeview 
$('ul.treeview-menu a').filter(function() { return this.href == url; }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

  // // To make Pace works on Ajax calls
  // $(document).ajaxStart(function () {
  //   Pace.restart()
  // })
  // $('.ajax').click(function () {
  //   $.ajax({
  //     url: '#', success: function (result) {
  //       $('.ajax-content').html('<hr>Ajax Request Completed !')
  //     }
  //   })
  // })


  $(document).on('change','.toggle-trigger',function(){                            
    var url=$(this).attr('data-url');
    var id=$(this).attr('data-id');
    var status=$(this).attr('data-status');
    var element=$(this);
        swal({
  title: "Confirmation !!",
  text: "Are you sure want to Update the status?",
  type: "warning",
  buttons: true,
  showCancelButton: true,
},function(isConfirm) {
  if (isConfirm) {
          $.ajax({
            url: url,
            type: "get",
            async: true,
            dataType: "json",
            data:{'id':id,'status':status},
            success: function (res)
            {
                // element.attr('id',res.data);
                // element.val(res.data);
                element.attr('data-status',res.status);
                toastr.success(res.message);   
            },
            error: function()
            {
                toastr.error('Failed to Update Status');
            },
          });
      } 
      else {
        if (status==0)
        element.bootstrapToggle('off');
    else
        element.bootstrapToggle('on');
      }

  });
          
});
 $(document).on('click','.delete',function(){                           
    var url=$(this).attr('data-url');
    swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel it!",
  closeOnConfirm: false,
  closeOnCancel: false,
}, function(isConfirm) {
  if (isConfirm) {
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
                swal(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )                
                setTimeout(function(){window.location.reload()}, 1000);                

            },
            error: function()
            {
               
            },
          });
        }
        else{
           swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                    )
        }

     });     
});

</script>
<style>
#submitarea{
        float:right;
            padding-right: 0px;
    padding-left: 303px;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice{
        background-color: #3c8dbc;
    }
    label.error{
        color:red;
    }
</style>
</body>
</html>
