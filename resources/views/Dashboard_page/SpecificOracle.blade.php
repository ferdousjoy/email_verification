@extends('layouts.dashboard_head')
@section('content')



 <h1> Welcome To  Specific Oracle Page</h1><hr>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


 <!-- Button trigger modal -->
<a type="button" class="btn btn_info" data-toggle="modal" data-target="#exampleModalLong">
   <h6 class="head_title"> Upload</h6>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Specific Orcle Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row input_row">
          <div class="">
            <form class="" action="{{url('/Specific/Update')}}" method="post" enctype="multipart/form-data">
              @csrf
              <h2 class="head_title">Upload <i class="fa fa-cloud"></i></h2>
              <input type="text" id="form1" class="form-control" placeholder="Headline" name="title"><br>
              <h4> Select Category</h4>
               <select class="form-control" name="ctg">
                 <option value="">Choose One</option>
                 @foreach($attach as $key)
                  <option value="{{$key->id}}">{{$key->ttile}}</option>
                 @endforeach

               </select><br>
              <input type="text" id="form1" class="form-control" placeholder="Headline" name="text"><br>
                     <div class="input-group control-group after-add-more">

                       <input type="text" name="list[]" class="form-control" placeholder="Enter Name Here">

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
               <button type="submit" class="btn btn-primary">Insert</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div><br><br><br>





<div class="row">
  <table class="table table-bordered" style="padding:30px;margin:30px;width:90%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Detail</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>




  </tbody>
</table>
</div>

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
