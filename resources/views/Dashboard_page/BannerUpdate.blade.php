@extends('layouts.dashboard_head')
@section('content')

 <h1> Welcome To Banner Page</h1><hr>


 <!-- Button trigger modal -->
<a type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">
   <h6 class="head_title">Update  Banner</h6>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Banner Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row input_row">
          <div class="">
            <form class="" action="{{url('/U1')}}" method="post" enctype="multipart/form-data">
              @csrf
              <h2 class="head_title">Update <i class="fa fa-cloud"></i></h2>
              <input type="hidden" id="form1" class="form-control" value="{{$attach->id}}" name="all_id"><br>
              <input type="text" id="form1" class="form-control"  value="{{$attach->title}}"  placeholder="Headline" name="title"><br>
              <input type="text" id="form1" class="form-control"  value="{{$attach->text}}"  placeholder="Text" name="text"><br>
              <input type="file" id="form1" class="form-control upload_file" placeholder="Text" name="allimg"><br>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Update</button>
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
</script>
@endsection
