<div class="col-lg-3  col-xs-6">
  <div class="small-box bg-purple">
    <div class="inner">
        <h3>2</h3> <p>Receivable Payments</p>
    </div>
    <div class="icon">
        <i class="fa fa-folder-open"></i>
    </div>
    <!-- <a href="{{ url('/banner') }}" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
    </a> -->
  </div>
</div>

<div class="col-lg-3 col-xs-6">
  <div class="small-box bg-yellow">
    <div class="inner">
        <h3>3</h3> <p>Pending Payments</p>
    </div>
    <div class="icon">
        <i class="fa fa-clock-o"></i>
    </div>
    <!--  <a href="{{ url('/stock') }}" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
    </a> -->
  </div>
</div>

<div class="col-lg-3 col-xs-6">
  <div class="small-box bg-green">
    <div class="inner">
        <h3>70</h3> <p>Closed Payments</p>
    </div>
    <div class="icon">
        <i class="fa fa-times-circle-o"></i>
    </div>
    <!-- <a href="{{ url('/users') }}" class="small-box-footer">
      More info <i class="fa fa-arrow-circle-right"></i>
    </a> -->
  </div>
</div>

<div class="col-lg-3 col-xs-6">
  <div class="small-box bg-maroon">
    <div class="inner">
        <h3>70</h3> <p>Total</p>
    </div>
    <div class="icon">
        <i class="fa fa-plus"></i>
    </div>
    <!-- <a href="{{ url('/users') }}" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
    </a> -->
  </div>
</div>


<!-- Chart and appoinments -->
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Lead Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="form-group">
                <input type="text" class="datepicker" id="fromdate" placeholder="Date From">
                <input type="text" class="datepicker" id="todate" placeholder="Date To">
                {!! Form::select('dealtype',[''=>'--Select Deal--'],'',array('id'=>'dealtype')) !!}
              </div>
              <div class="chart" id="revenue-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-border">
              <ul class="b-legend js-legend">
                    <li class="b-legend__item m-blue">
                        <label>
                            <small>
                                <input type="checkbox" class="js-checkbox" data-index="0" checked="checked"> Lead Calls 
                            </small>
                            <span class="js-calls">32</span>
                        </label>
                    </li>
                    <li class="b-legend__item m-gray">
                        <label>
                            <small>
                                <input type="checkbox" class="js-checkbox" data-index="1" checked="checked"> E-mail Leads
                            </small>
                            <span class="js-emails">15</span>
                        </label>
                    </li>
                    <li class="b-legend__item m-red">
                        <label>
                            <small>
                                <input type="checkbox" class="js-checkbox" data-index="2" checked="checked"> Direct calls
                            </small>
                            <span class="js-direct-calls">111</span>
                        </label>
                    </li>
                    <li class="b-legend__item m-green">
                        <label>
                            <small>
                              <input type="hidden">  Total
                            </small>
                            <span class="js-total">158</span>
                        </label>
                    </li>
                </ul>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pending Payments</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
              </div>
            </div>
            <div class="box-body">
              <div class="col-md-12 appblocks">
                <div class="col-md-4 cardetails">
                    <p>
                      <span><a href="https://yzermotors.com/en/dubai/car-for-rent/1105">Peugeot 301, 2015</a></span><br>
                      <span><small>Sedan, Automatic</small></span><br>
                      <span><small>Sales</small></span>
                    </p>
                </div>
                <div class="col-md-4 cardetails">
                    <p>
                      <span class="b-form__head">Hassan</span><br>
                      <span class="b-form__phone"><small>+971-56-680-1357</small></span><br>
                      <span class="b-form__email"><a href="mailto:hsaraierh@gmail.com"><small>hsaraierh@gmail.com</small></a></span><br>
                    </p>
                </div>
                <div class="col-md-4 cardetails">
                    Amount to be Receive
                    <div class="form-group">
                      <button type="button" class="btn bg-navy margin"><i class="fa fa-money"> 20000 AED</i></button>
                    </div>
                </div>
              </div>
              <div class="col-md-12 appblocks">
                <div class="col-md-4 cardetails">
                    <p>
                      <span><a href="https://yzermotors.com/en/dubai/car-for-rent/1105">Audi Q7, 2015</a></span><br>
                      <span><small>SUV, Automatic</small></span><br>
                      <span><small>Rent</small></span>
                    </p>
                </div>
                <div class="col-md-4 cardetails">
                    <p>
                      <span class="b-form__head">Hassan</span><br>
                      <span class="b-form__phone"><small>+971-56-680-1357</small></span><br>
                      <span class="b-form__email"><a href="mailto:hsaraierh@gmail.com"><small>hsaraierh@gmail.com</small></a></span><br>
                    </p>
                </div>
                <div class="col-md-4 cardetails">
                    Amount to be Receive
                    <div class="form-group">
                      <button type="button" class="btn bg-navy margin"><i class="fa fa-money"> 1000 AED</i></button>
                    </div>
                </div>
              </div>
              <div class="col-md-12 appblocks">
                <div class="col-md-4 cardetails">
                    <p>
                      <span><a href="javascript:void(0)">Mercedes-Benz GLA Class, 2017</a></span><br>
                      <span><small>Sedan, Automatic</small></span><br>
                      <span><small>Rent</small></span>
                    </p>
                </div>
                <div class="col-md-4 cardetails">
                    <p>
                      <span class="b-form__head">Hassan</span><br>
                      <span class="b-form__phone"><small>+971-56-680-1357</small></span><br>
                      <span class="b-form__email"><a href="mailto:hsaraierh@gmail.com"><small>hsaraierh@gmail.com</small></a></span><br>
                    </p>
                </div>
                <div class="col-md-4 cardetails">
                    Amount to be Receive
                    <div class="form-group">
                      <button type="button" class="btn bg-navy margin"><i class="fa fa-money"> 2200 AED</i></button>
                    </div>
                </div>
              </div>
            <div class="col-md-12 appblocks">
                <div class="col-md-4 cardetails">
                    <p>
                      <span><a href="javascript:void(0)">BMW X3</a></span><br>
                      <span><small>SUV, Automatic</small></span><br>
                      <span><small>Rent</small></span>
                    </p>
                </div>
                <div class="col-md-4 cardetails">
                    <p>
                      <span class="b-form__head">Hassan</span><br>
                      <span class="b-form__phone"><small>+971-56-680-1357</small></span><br>
                      <span class="b-form__email"><a href="mailto:hsaraierh@gmail.com"><small>hsaraierh@gmail.com</small></a></span><br>
                    </p>
                </div>
                <div class="col-md-4 cardetails">
                    Amount to be Receive
                    <div class="form-group">
                      <button type="button" class="btn bg-navy margin"><i class="fa fa-money"> 2400 AED</i></button>
                    </div>
                </div>
               
              </div>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      <!-- </div> -->
<!-- End of Chart and appoinments -->

<script>
  $(function () {
    "use strict";

    // AREA CHART
    var area = new Morris.Area({
      element: 'revenue-chart',
      resize: true,
      data: [
        {y: '2017-11-27', item1: 8, item2: 8 , item3: 8},
        {y: '2017-11-28', item1: 20, item2: 30 , item3: 8},
        {y: '2017-11-29', item1: 30, item2: 5 , item3: 8},
        {y: '2017-11-30', item1: 20, item2: 16 , item3: 10},
        {y: '2017-12-01', item1: 15, item2: 24 , item3: 8},
        {y: '2017-12-02', item1: 20, item2: 30 , item3: 10},
      ],
      xkey: 'y',
      ykeys: ['item1', 'item2','item3'],
      labels: ['Direct Call', 'Email','Message'],
      lineColors: ['#52a7f9', 'grey','red'],
      hideHover: 'auto'
    });
    });
  </script>
<style type="text/css">
.appblocks{
      /*display:block;*/
      border-radius: 10px;
      border: 1px solid #ddd;
      height:98px;
      margin-bottom: 10px;
      margin-top: 5px;
}
.cardetails
{ 
    padding-left: 5px;
    top: 10px;
}
.b-legend {
    text-align: left;
    font-size: 0;
    line-height: 0;
    padding: 0;
    margin: 0;
}
.b-legend__item {
    text-align: left;
    display: inline-block;
    vertical-align: top;
    margin: 0 15px 10px 0;
    color: #fff;
    border-radius: 4px;
    position: relative;
}
.b-legend__item label {
    padding: 10px 10px 10px 10px;
    display: block;
    margin: 0;
    cursor: pointer;
}
.b-legend__item span {
    display: block;
    font-size: 26px;
    line-height: 40px;
    font-family: Helvetica,Arial,sans-serif;
}
.b-legend__item small {
    display: block;
    font-size: 16px;
    line-height: 20px;
}
.b-legend__item.m-blue {
    background-color: #52a7f9;
}
.b-legend__item.m-gray {
    background-color: #a7aaa9;
}
.b-legend__item.m-green {
    background-color: #6fc041;
     padding-right: 10px;
    padding-left: 10px;
    margin-right: 0px;
} 
.b-legend__item.m-red {
    background-color: #ec5d57;  
}
#dealtype
{
    width: 135px;
    height: 27px;
}
.appfooter
{
   padding-left: 5px;
   padding-bottom: 5px;
    padding-top: 6px;
}
.appfooter a{
  padding-left: 210px;
}
</style>