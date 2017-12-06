@extends('layouts.dashboard')

@section('content')
<!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        Dashboard
        <small>Simply make a Overview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>
 <!-- Main content -->
 <section class="content">
     <div class="row">
      
      @if(Auth::user()->role==1)
        <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
              <h3>2</h3>
              <p>Banner</p>
            </div>
            <div class="icon">
              <i class="fa fa-picture-o"></i>
            </div>
            <a href="{{ url('/banner') }}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
              <h3>4</h3>
              <p>Testimonials</p>
            </div>
            <div class="icon">
              <i class="fa fa-quote-left"></i>
            </div>
            <a href="{{ url('/testimonials') }}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-blue">
            <div class="inner">
              <h3>120</h3>
              <p>Cars</p>
            </div>
            <div class="icon">
              <i class="fa fa-car"></i>
            </div>
            <a href="{{ url('/details') }}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
              <h3>70</h3>
              <p>Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{{ url('/user') }}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      @elseif(Auth::user()->role==3)
         @include('dashboard.accountsdash')
      @elseif(Auth::user()->role==4)
         @include('dashboard.executivedash')
      @endif
</section> 

@endsection
