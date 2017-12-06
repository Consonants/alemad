<div class="row">
   <div class="col-md-12 listing">
      <div class="col-md-4">
      </div>
      <div class="col-md-8 carblock">
        <div class="col-md-4">
            <div class="imageblock">
                        <img src="{{ asset('images/car2.png') }}" height="250px" width="250px">
        </div>
        </div>
        <div class="col-md-6 cardatas">
            <h2> Audi Q7 2015</h2>
            <p> White</p>
            <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#itemmodal" id="addemail" data-url="{{ url('items/create') }}">Contact</button>
        </div>
        <div class="col-md-6 rents">
          <div class="col-md-3">
            Daily  <br>40 
          </div>
          <div class="col-md-3">
            Weekly 200 
          </div>
          <div class="col-md-3">
            Monthly 1.7K 
          </div>
          AED
        </div>
        
                        
       </div>
   </div>
</div>
<div class="modal fade" id="itemmodal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Contact Request</h4>
            </div>
            <div class="modal-body">
             {!! Form::open(array('method'=>'post','id'=>'itemsform','class'=>'form-horizontal','autocomplete'=>'off','novalidate'=>'novalidate')) !!}
             
              <div class="form-group">
                  {!! Form::hidden('form_type','',array('id'=>'formtype','id'=>'formtype')) !!}
                  {!! Form::hidden('itemid','',array('class'=>'form-control','id'=>'itemid')) !!}
              </div>
                                
              <div class="form-group">
                <label for="inputcontactperson" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-6">
                    {!! Form::text('itemname',null,array('class'=>'form-control','placeholder'=>'Enter a Name','id'=>'itemname')) !!}
                </div>
              </div>
              <div class="form-group">
                <label for="inputcontactperson" class="col-sm-3 control-label">E-mail</label>
                <div class="col-sm-6">
                    {!! Form::text('itemname',null,array('class'=>'form-control','placeholder'=>'Enter a Email','id'=>'itemname')) !!}
                </div>
              </div>
              <div class="form-group">
                <label for="inputcontactperson" class="col-sm-3 control-label">Mobile</label>
                <div class="col-sm-6">
                    {!! Form::text('itemname',null,array('class'=>'form-control','placeholder'=>'Enter a Mobile number','id'=>'itemname')) !!}
                </div>
              </div>
              <div class="form-group">
                <label for="inputcontactperson" class="col-sm-3 control-label">Address</label>
                <div class="col-sm-6">
                    <textarea rows="10" cols="40"> </textarea>
                </div>
              </div>
             
            </div>
            <div class="modal-footer">
                <!-- <button type="submit" class="btn btn-success" id="btn-save">Save changes</button> -->
                <button type="button" class="btn btn-success" id="btn-save">Call Me</button>
                <button type="button" class="btn btn-success" id="btn-save">Send a E-mail</button>
                <!-- <button type="button" class="btn btn-danger cancel" data-dismiss="modal">cancel</button> -->
                {!! Form::close() !!}
            </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div> 

<style type="text/css">
.imageblock {
    display: block;
    position: relative;
    color: #4a90e2;
    /*font-family: Helvetica,Arial,sans-serif;*/
    overflow: hidden;
    text-overflow: ellipsis;
    -o-text-overflow: ellipsis;
    float: left;
}
.carblock{
      /*display:block;*/
      border-radius: 10px;
      border: 1px solid #ddd;
      height:auto;
      margin-bottom: 10px;
      margin-top: 5px;
}
.cardatas div{
     display: inline-block;
}
.rents > div{
     display: inline-block;
}


</style>