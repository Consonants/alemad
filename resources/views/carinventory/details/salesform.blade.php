<div class="box-body sales">
    <form method="post" action="{{ url('/details') }}" enctype="multipart/form-data" id="cardetails" class="form-horizontal">
{{ csrf_field() }}
    <P><input type="hidden" name="id" value="{{ $users->id }}"></P>
    <P><input type="hidden" name="form" value="{{ $form_type }}"></P>
    <p><input type="hidden" name="type" value="{{ $deal_type }}"></p>
              <h2 class="headings">Sale a Car</h2><hr>
                <div class="col-md-12">
                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Make</label>
                            <div class="col-sm-6">
                              {{ Form::select('carmake', ['' => 'Choose Make']+carmake(),$users['gearbox'], array('class' => 'form-control','id'=>'carmake')) }} 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Model</label>
                            <div class="col-sm-6">
                              {{ Form::select('model', ['' =>'Choose Model'],null, array('class' => 'form-control','id'=>'model')) }} 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Sub-Model</label>
                            <div class="col-sm-6">
                              {{ Form::select('submodel', ['' =>'Choose Sub-Model'],null, array('class' => 'form-control','id'=>'submodel')) }} 
                            </div>
                        </div>   
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Year</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="year" placeholder="Year" value="{{$users-> year}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Mileage</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="milleage" placeholder="Mileage" value="{{$users->milleage}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Condition</label>
                            <div class="col-sm-6">
                                {{ Form::select('condition', ['' => 'Choose Condition']+condition(),$users['body_condition'], array('class' => 'form-control','id'=>'condition')) }} 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Gearbox</label>
                            <div class="col-sm-6">
                                {{ Form::select('gearbox', ['' => 'Choose Transmission']+gear(),$users['gearbox'], array('class' => 'form-control','id'=>'gearbox')) }}                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Body Type</label>
                            <div class="col-sm-6">
                              {{ Form::select('bodytype', ['' => 'Choose Body Type']+bodytype(),$users['gearbox'], array('class' => 'form-control','id'=>'bodytype')) }} 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Interior Color</label>
                            <div class="col-sm-6">
                              {{ Form::select('intcolor', ['' => 'Choose Color']+carcolor(),$users['gearbox'], array('class' => 'form-control','id'=>'intcolor')) }} 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Exterior Color</label>
                            <div class="col-sm-6">
                               {{ Form::select('extcolor', ['' => 'Choose Color']+carcolor(),$users['gearbox'], array('class' => 'form-control','id'=>'extcolor')) }} 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Mechanical</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="mechanic" placeholder="Mechanic" value="{{$users-> Mechanic}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Specs</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="specs" placeholder="Specs" value="{{$users-> specs}}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Body </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="body" placeholder="Body Condition" value="{{$users-> body}}">
                            </div>
                        </div>
                        
                        <div class="form-group" id="sales">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Price</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="price" placeholder="Price" value="{{$users-> price}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                            </div>
                        </div>
                    </div>
                </div><br>
                    <!-- Features Section -->
                        <h2 class="headings">Features</h2><hr>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Interior Features</label>
                            <div class="col-sm-6">
                                {{ Form::select('interior[]',features(2),json_decode($users['interior']), array('class' => 'form-control select2','multiple'=>'multiple')) }}                                
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Exterior Features</label>
                            <div class="col-sm-6">
                                {{ Form::select('exterior[]',features(1),json_decode($users['exterior']), array('class' => 'form-control select2','multiple'=>'multiple')) }}                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Security and Environment</label>
                            <div class="col-sm-6">
                                {{ Form::select('security[]',features(3),json_decode($users['security']), array('class' => 'form-control select2','multiple'=>'multiple')) }}                                
                            </div>
                        </div>
                        <br>
                    <!--End of Features Section --> 
                    <h2 class="headings">Additional Information</h2><hr>
                        <div class="form-group">
                             <label for="inputcompanyname" class="col-sm-3 control-label">Details</label>                           
                             <div class="col-sm-8">
                                <textarea id="editor1" name="details" rows="20" cols="80">
                                            {{$users-> details}}
                                 </textarea>
                             </div>
                        </div>

                    <h2 class="headings">Images</h2><hr>
                        <div class="form-group">
                             <label for="inputcompanyname" class="col-sm-3 control-label">Upload Images</label>
                                <div class="col-sm-8">
                                     <div class="dropzone clsbox" id="mydropzone"></div>
                                     <input type="hidden" name="images" id="images">
                                </div>
                        </div>

                    <!-- <div class="col-md-12 submission" style="display:none;"> -->
                        <div class="form-group">
                            <label for="inputcompanyname" class="col-sm-3 control-label">Offers</label>
                            <div class="col-sm-6">
                            <ul class="checkbox icheck" id="salescheck">
                              <li><input type="checkbox" class="offer" name="offer"  @if(($users->best)=='1') checked @endif> Best Offers</li>
                              <li><input type="checkbox" class="offer" name="popular" @if(($users->popular)=='1') checked @endif> Popular Cars</li>
                              <li></li>
                              <li><input type="checkbox" class="offer" name="economic" @if(($users->economic)=='1') checked @endif> Economic Cars</li>
                              
                            </ul>
                            </div>
                        </div>
                        
                        <div class="form-group">  
                            <div class="col-sm-6" id="submitarea">                         
                                <button type="submit" class="btn btn-success" id="btn-save">Save</button>
                                <a href="{{ url('details') }}" class="btn btn-danger" role="button" style="color: white;">Cancel</a>
                            </div>
                        </div>
                <!-- </div> -->

</form>
</div>


<script type="text/javascript">
$(document).ready(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
    
});
            var token   =   $('meta[name="csrf-token"]').attr('content');
             Dropzone.autoDiscover = false;
            $(function() {
               
        // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')

     $('.select2').select2({placeholder: "Select Feature"})
    //bootstrap WYSIHTML5 - text editor
  });
$("div#mydropzone").dropzone({ 
    url: "{{ url('/dropzoneUploadFile')}} ",
    paramName: 'file',  
    maxFiles: 10, 
    params: {
        _token: token // dont need this line after following above steps
    },
    uploadMultiple: true,
    parallelUploads : 10,
    success: function(file, response){
        $('#images').val(response.returnarray);
    },
});

  // $("div#myDropZone").dropzone({
    //     url : "{{ url('dropzoneUploadFile')}}",
    //      params: {
    //             _token: $('meta[name="csrf-token"]').attr('content') 
    //      },
    //     uploadMultiple: true,
    //       method: "post",
    // });
    // var formNewPost=$('#form-new-post')
    // $("div#form-new-post").dropzone({  
//     Dropzone.options.formNewPost = {
//     url :"{{ url('/details') }}",
//     autoProcessQueue: false,
//     uploadMultiple: true,
//     parallelUploads: 100,
//     maxFiles: 100,
//     maxFilesize: 3,
//     dictDefaultMessage: "",
//     previewsContainer: ".dropzone-previews",
//     thumbnailWidth: 50,
//     thumbnailHeight: 50,
//     clickable: "form#form-new-post #image",
    

//     init: function() {
//         var myDropzone = this;
//         var form = $("form#form-new-post");

//         this.element.querySelector('button[type="submit"]').addEventListener("click", function(e)
//         {
//             e.preventDefault();
//             e.stopPropagation();
//             myDropzone.processQueue();
//         });
//     }
// };
// });
$("#cardetails").validate({
            rules: {
                carmake:{
                    required:{
                        depends: function(element) {
                            return ($('#carmake').val()==''); 
                        }
                    }
                },
                model:{
                    required:{
                        depends: function(element) {
                            return ($('#model').val()==''); 
                        }
                    }
                },
                submodel:{
                    required:{
                        depends: function(element) {
                            return ($('#submodel').val()==''); 
                        }
                    }
                },                                        
                year: {
                    required: true,
                    minlength: 2,
                    number:true,
                },
                gearbox:{
                    required:{
                        depends: function(element) {
                            return ($('#gearbox').val()==''); 
                        }
                    }
                },
                bodytype:{
                    required:{
                        depends: function(element) {
                            return ($('#bodytype').val()==''); 
                        }
                    }
                },
                intcolor:{
                    required:{
                        depends: function(element) {
                            return ($('#intcolor').val()==''); 
                        }
                    }
                },
                extcolor:{
                    required:{
                        depends: function(element) {
                            return ($('#extcolor').val()==''); 
                        }
                    }
                },
                daily: {
                    required:true,
                    minlength: 3,
                    number:true
                },
                weekly: {
                    required:true,
                    minlength: 3,
                    number:true
                },
                monthly: {
                    required:true,
                    minlength: 3,
                    number:true
                },
            },
            messages: {
                carmake:{
                    required:"Please Choose a make",
                },
                model:{
                    required:"Please Choose a model",
                },
                submodel:{
                    required:"Please Choose a Sub-model",
                },                                        
                year: {
                    required: "Please enter a year",
                    minlength: "please enter a valid year ",
                    number:"Please enter a number only",
                },
                gearbox:{
                    required:"Please Choose a Gearbox type",
                },
                bodytype:{
                    required: "Please Choose a Body type",
                },
                intcolor:{
                    required:"Please Choose a Interior Color",
                },
                extcolor:{
                    required: "Please Choose a Exterior Color",
                },
                daily: {
                    required:"Please Enter a Daily Rent",
                    minlength: "Please Enter a minimum amount",
                    number: "Please enter a number only",
                },
                weekly: {
                    required:"Please Enter a Weekly Rent",
                    minlength: "Please Enter a minimum amount",
                    number:"Please enter a number only",
                },
                monthly: {
                    required:"Please Enter a Monthly Rent",
                    minlength: "Please Enter a minimum amount",
                    number:"Please enter a number only",
                },
            },
 });
</script> 
<style type="text/css">
#salescheck li
{
    display: block;
    width: 50%;
    padding-bottom: 3px;
}
</style>