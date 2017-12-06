@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <div class="row">
         <div class="col-md-12">
             <div class="box-header with-border">
              <h1 class="box-title">Appoinments</h1>
            
        </div>
    </div>
</section>
@if(Auth::user()->role==4)
<section class="content">    
    <div class="row">
        <div class="col-md-12">
          <div class="col-md-6">
          

          <div class="box">
            <div class="box-body">
                <div class="ribbon"><span>Sale</span></div>
            <div class="col-md-12">
                <div class="col-md-4 cardetails">
                    <p>
                      <span><a href="https://yzermotors.com/en/dubai/car-for-rent/1105">Peugeot 301, 2015</a></span><br>
                      <span><small>Sedan, Automatic</small></span><br>
                      <!-- <span><small>50 / 350 / 1,400 AED</small></span> -->
                    </p>
                </div>
                <div class="col-md-4 centerdivision">
                    <p>
                      <span class="b-form__head">Hassan</span><br>
                      <span class="b-form__phone"><small>+971-56-680-1357</small></span><br>
                      <span class="b-form__email"><a href="mailto:hsaraierh@gmail.com"><small>hsaraierh@gmail.com</small></a></span><br>
                    </p>
                </div>
                <div class="col-md-4">
                     <div style="margin-bottom: 10px;">
                        <p>25 November 2017  08:42</p>
                        <a class="b-form__ctype">
                        <small><i class="fa fa-phone"></i> Call request</small>
                        </a>
                    </div>
                    <div class="form-group">
                      <label for="inputcompanyname" class="col-sm-1 status">Status</label>
                      <div class="col-sm-3 leaddropdown">
                          <select  name="status_id" id="status_id">
                    <option value="1" selected="selected">Open lead</option>
                    <option value="2">Pending deal</option>
                    <option value="5">Booked daily</option>
                    <option value="7">Booked weekly</option>
                    <option value="8">Booked monthly</option>
                    <option value="6">Deal closed</option>
                    <option value="4">Cancelled</option>
                    <option value="3">Unavailable</option>
                    </select>
                      </div>
                    </div>
                </div>
            </div>
         </div>
            
     </div>
 </div>

     <div class="col-md-6">
         <div class="box">      
            <div class="box-body">
                <div class="ribbon" id="rent"><span>Rent</span></div>
            <div class="col-md-12">
                <div class="col-md-4 cardetails">
                    <p>
                      <span><a href="https://yzermotors.com/en/dubai/car-for-rent/1105">Peugeot 301, 2015</a></span><br>
                      <span><small>Sedan, Automatic</small></span><br>
                      <!-- <span><small>50 / 350 / 1,400 AED</small></span> -->
                    </p>
                </div>
                <div class="col-md-4 centerdivision">
                    <p>
                      <span class="b-form__head">Hassan</span><br>
                      <span class="b-form__phone"><small>+971-56-680-1357</small></span><br>
                      <span class="b-form__email"><a href="mailto:hsaraierh@gmail.com"><small>hsaraierh@gmail.com</small></a></span><br>
                    </p>
                </div>
                <div class="col-md-4">
                     <div style="margin-bottom: 10px;">
                        <p>25 November 2017  08:42</p>
                        <a class="b-form__ctype">
                        <small><i class="fa fa-phone"></i> Call request</small>
                        </a>
                    </div>
                    <div class="form-group">
                      <label for="inputcompanyname" class="col-sm-1 status">Status</label>
                      <div class="col-sm-3 leaddropdown">
                          <select  name="status_id" id="status_id">
                    <option value="1" selected="selected">Open lead</option>
                    <option value="2">Pending deal</option>
                    <option value="5">Booked daily</option>
                    <option value="7">Booked weekly</option>
                    <option value="8">Booked monthly</option>
                    <option value="6">Deal closed</option>
                    <option value="4">Cancelled</option>
                    <option value="3">Unavailable</option>
                    </select>
                      </div>
                    </div>
                </div>
            </div>
         </div>
          </div>  
       </div>   
                </div>
            </div>
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->
</section>
@elseif(Auth::user()->role==3)
   @include('appoinment.accountindex')
@endif
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

.ribbon {
   position: absolute;
   right: -5px; top: -5px;
   z-index: 1;
   overflow: hidden;
   width: 75px; height: 75px; 
   text-align: right;
}
.ribbon span {
   font-size: 20px;
   color: #fff; 
   text-transform: uppercase; 
   text-align: center;
   font-weight: bold; line-height: 20px;
   transform: rotate(45deg);
   -webkit-transform: rotate(45deg); /* Needed for Safari */
   width: 100px; display: block;
   background: #79A70A;
   background: linear-gradient(#9BC90D 0%, #79A70A 100%);
   box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
   position: absolute;
   top: 19px; right: -21px;
}
#rent span
{
    background: red;
}
p span
{
  font-size: 18px;
}
.cardetails{
        margin-left: 0px;
    padding-left: 0px;
}
.leaddropdown
{
        padding-left: 27px;
 }
.status
{
  padding-left: 0px;
}
.centerdivision{
    padding-left: 10px;
} 
</style>
@endsection