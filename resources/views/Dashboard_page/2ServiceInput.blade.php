@extends('layouts.dashboard_head')
@section('content')

<style media="screen">
   .none {
             display:none;
            }
</style>

 <h1> Welcome To Two Specific Service Page</h1><hr>
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
        <h5 class="modal-title" id="exampleModalLongTitle"> Two Specific Service Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row input_row">
          <div class="">
            <form class="" action="{{url('/Specific/Update/two')}}" method="post" enctype="multipart/form-data">
              @csrf
              <h2 class="head_title">Upload <i class="fa fa-cloud"></i></h2>
              <input type="text" id="form1" class="form-control" placeholder="Headline" name="title"><br>
                  <h6>Select Oracle Solution Or Biometric</h6>
                <input type="radio" name='thing' value='oracle' data-id="bank" />
                <input type="radio" name='thing' value='bio' data-id="school" />
                <select  id="bank"  class="form-control none" name="ctg1">
                  <option value="">Ups Model</option>
                  @foreach($attach as $key)
                   <option value="{{$key->id}}">{{$key->title}}</option>
                  @endforeach

                </select><br>
                <select  id="school"class="form-control none" name="ctg">
                  <option value="">Fire </option>
                  @foreach($attach2 as $key)
                   <option value="{{$key->id}}">{{$key->title}}</option>
                  @endforeach

                </select><br>


                <script>
                $(':radio').change(function (event) {
                  var id = $(this).data('id');
                  $('#' + id).addClass('none').siblings().removeClass('none');
              });
                </script>



              <input type="text" id="form1" class="form-control" placeholder="Headline" name="text"><br>
                     <textarea name="full_text"  class="form-control"></textarea><br>

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
  <h1>Biometric Detail</h1>
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

   @foreach($up as $key)
   <tr>
   <td> {{$key->title}}</td>
   <td> {{$key->text}}</td>
  <td> {{$key->full_text}}</td>
   <td> <img src="{{asset($key->all_img)}}" alt="" width="50">  </td>
   <td>

      <!-- <a href="{{route('ESD', $key->id)}}"> <i class="fa fa-edit"></i></a> -->
     <a href="{{route('DSDD', $key->id)}}"> <i class="fa fa-trash"></i></a>
   </td>
   </tr>
   @endforeach


  </tbody>
</table>
</div><br><br>

<div class="row">
  <h1>Oracle Detail</h1>
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

   @foreach($fir as $key)
   <tr>
   <td> {{$key->title}}</td>
   <td> {{$key->text}}</td>
   <td> {{$key->full_text}}</td>
   <td> <img  src="{{asset($key->all_img)}}" alt="" width="50">  </td>
   <td>

      <!-- <a href="{{route('ESD', $key->id)}}"> <i class="fa fa-edit"></i></a> -->
     <a href="{{route('DSDDD', $key->id)}}"> <i class="fa fa-trash"></i></a>
   </td>
   </tr>
   @endforeach


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
