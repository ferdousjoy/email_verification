@extends('layouts.dashboard_head')
@section('content')



 <h1> Welcome To Service Page</h1><hr>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


 <!-- Button trigger modal -->
<a type="button" class="btn btn_info" data-toggle="modal" data-target="#exampleModalLong">
   <h6 class="head_title">Our  Service Detail</h6>
</a>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Service Detail Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row input_row">
          <div class="">
            <form class="" action="{{url('/OurServiceDetailUpdate/insert')}}" method="post" enctype="multipart/form-data">
              @csrf
              <h2 class="head_title">Upload <i class="fa fa-cloud"></i></h2>
              <input type="hidden" id="form1" class="form-control" placeholder="Headline" name="all_id" value="{{$attach->id}}"><br>
              <input type="text" id="form1" class="form-control" placeholder="Headline" name="title" value="{{$attach->title}}"><br>
              <input type="text" id="form1" class="form-control" placeholder="Headline" name="text" value="{{$attach->text}}"><br>


                     <div class="input-group control-group after-add-more">

                       <input type="text" name="list[]" class="form-control" placeholder="Enter Name Here" value="{{$attach->text}}">

                       <div class="input-group-btn">
                         <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                       </div>
                     </div>
                     <div class="copy hide">
                       <div class="control-group input-group" style="margin-top:10px">
                         <input type="text" name="list[]" class="form-control bb" placeholder="Enter Name Here">
                         <div class="input-group-btn">
                           <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                         </div>
                       </div>
                     </div>

              <input type="file" id="form1" class="form-control upload_file"   name="all_img"><br>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">update</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div><br><br><br>

@endsection
@section('foot')
<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

   $(document).ready(function() {


     $(".add-more").click(function(){

         var html = $(".copy").html();

         $(".after-add-more").after(html);

     });






   });
</script>
@endsection
