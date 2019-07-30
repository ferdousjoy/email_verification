@extends('layouts.dashboard_head')
@section('content')

 <h1> Welcome To Upperhead Page</h1><hr>


 <!-- Button trigger modal -->
<a type="button" class="btn btn_info" data-toggle="modal" data-target="#exampleModalLong">
   <h6 class="head_title">Update</h6>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row input_row">
          <div class="">
            <form class="" action="{{url('/UU')}}" method="post" enctype="multipart/form-data">
              @csrf
              <h2 class="head_title">Upload <i class="fa fa-cloud"></i></h2>
                <input type="hidden" id="form1" class="form-control" value="{{$attach->id}}" name="all_id"><br>
              <input type="text" id="form1" class="form-control" placeholder="Phone Number" value="{{$attach->phone1}}" name="phone1"><br>
              <input type="text" id="form1" class="form-control" placeholder="Phone Number two" value="{{$attach->phone2}}" name="phone2"><br>
              <input type="text" id="form1" class="form-control" placeholder="Email" value="{{$attach->email}}" name="email"><br>
              <input type="text" id="form1" class="form-control" placeholder="Fontawome Icon" value="{{$attach->icon}}" name="icon"><br>
              <input type="text" id="form1" class="form-control" placeholder="Link" value="{{$attach->link}}" name="link"><br>


                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Insert</button>
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
