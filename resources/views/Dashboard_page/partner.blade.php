@extends('layouts.dashboard_head')
@section('content')

 <h1> Welcome To Partner Page</h1><hr>


 <!-- Button trigger modal -->
<a type="button" class="btn btn_info" data-toggle="modal" data-target="#exampleModalLong">
   <h6 class="head_title">Add  Partner</h6>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Partner Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row input_row">
          <div class="">
            <form class="" action="{{url('/Partner/insert')}}" method="post" enctype="multipart/form-data">
              @csrf
              <h2 class="head_title">Upload <i class="fa fa-cloud"></i></h2>
               <label for="">Partner Company Logo</label>
              <input type="file" id="form1" class="form-control upload_file" placeholder="Text" name="allimg"><br>
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

      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($attach as $key)
    <tr>

      <td>{{$sl++}}</td>
      <td><img width="70" src="{{asset($key->allimg)}}"> </td>
      <td>

        <!-- <a href="{{route('E1', $key->id)}}"> <i class="fa fa-edit"></i></a> -->
        <a href="{{route('D11', $key->id)}}"> <i class="fa fa-trash"></i></a>
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
</script>
@endsection
