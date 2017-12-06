@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>Add a Car</h1>
</section>

<section class="content">
  <div class="row">
   <div class="col-md-12">
    <div class="box">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
          <div class="box-body">
            <div class="form-group">
                <label for="inputcompanyname" class="col-sm-3 control-label">Car Type</label>
                <div class="col-sm-6">
                    {{ Form::select('type', ['' => 'Select Car Type']+cartype(),$type, array('class' => 'form-control','id'=>'type')) }}                                
                </div>
            </div>
            <P><input type="hidden" name="id" value="{{ $id }}" id="id"></P>
          </div>
          
          <div class="panel">
          <i class="fa fa-spinner " id="wait" aria-hidden="true"></i>
          </div>
     </div>
   </div>
   </div>
</section>

<script type="text/javascript">

$(document).ready(function(){
 var type = $('#type').val();
 var carid =$('#id').val();
 var url= "{{ url('details/"+carid +"/edit')}}";
 if(type!='')
 {
  alert(carid);
  alert(url);
    // $.ajax({
    //         url: ,
    //         type: "get",
    //         dataType: "json",
    //         data:{'type':type,'id':id},
    //         success: function (res)
    //         {
    //             $('.panel').fadeIn().html(res.data);
    //         },
    //         error: function()
    //         {
    //             toastr.error('Failed');
    //         },
    //     });
 }
});
$('#type').on('change',function(){
        $('.panel').empty();
        var type = $(this).val();
        var url  = "{{ url('details/create')}}";
        if(type==1||type==2)
        {
        $.ajax({
            url: url,
            type: "get",
            dataType: "json",
            data:{'type':type},
            // beforeSend: function() { $('#wait').addClass('fa-spin'); },
            // complete: function() { $('#wait').removeClass('fa-spin'); },
            success: function (res)
            {
                $('.panel').fadeIn().html(res.data);
            },
            error: function()
            {
                toastr.error('Failed');
            },
        });
        }
        return false;
});

$(document).on('change','#carmake',function(){
  var carmake=$(this).val();
  $.ajax({
    url  : '{{ url("carmodel") }}',
    type : 'GET',
    data : {'make':carmake},
    success: function(res){
      $("#cardetails #model").empty();
      $("#cardetails #model").append("<option value=''>Choose Model</option>");
      $.each(res,function(key, value)
      {
          $("#cardetails #model").append('<option value=' + key + '>' + value + '</option>');
      });

    },
    error: function(){
      console.log('Failed to retrieve model');
    },

  });
});

$(document).on('change','#model',function(){
  var carmake=$('#carmake').val();
  var carmodel=$(this).val();
  $.ajax({
    url  : '{{ url("carsubmodel") }}',
    type : 'GET',
    data : {'make':carmake,'model':carmodel},
    success: function(res){
      $("#cardetails #submodel").empty();
      $("#cardetails #submodel").append("<option value=''>Choose Sub-Model</option>");
      $.each(res,function(key, value)
      {
          $("#cardetails #submodel").append('<option value=' + key + '>' + value + '</option>');
      });

    },
    error: function(){
      console.log('Failed to retrieve Submodel');
    },

  });
});


// carsubmodel
      // if($(this).val()=='1')
      // {carmodel
        
      //   $('.rentdivision').css('display','block');
      //   $('.salesdivision').css('display','none');
      //   $('.submission').css('display','block');
      //   // $('.icheck #banner').prop('checked',true).iCheck('update');
      //   // $('#bannerdivision').css('display','block');
      // }
      // else if($(this).val()=='2')
      // {
      //   $('.rentdivision').css('display','none');
      //   $('.salesdivision').css('display','block');
      //   $('.submission').css('display','block');
      //   $('#bannerdivision').css('display','none');
      //   // $('.icheck #banner').prop('checked',false).iCheck('update');
      //   // $('#bannerdivision').css('display','none');
      // }
      // else
      // {
      //   $('.rentdivision').css('display','none');
      //   $('.salesdivision').css('display','none');
      //   $('.submission').css('display','none');
      // }

 // });

    
 
// @if($users['type']=='1')
//  $('#rent').css('display','block');
//  $('#sales').css('display','none');
// @endif
</script>
<style>


.sales{
   border: 1px solid;
            /*border-radius: 5px;*/
}
.headings{
    padding-left: 5px;
}
</style>
 
@endsection
    