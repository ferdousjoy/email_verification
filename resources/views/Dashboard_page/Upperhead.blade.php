@extends('layouts.dashboard_head')
@section('content')

 <h1> Welcome To Upperhead Page</h1><hr>


 <!-- Button trigger modal -->
<a type="button" class="btn btn_info" data-toggle="modal" data-target="#exampleModalLong">
   <h6 class="head_title">Add  Upperhead</h6>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upperhead Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row input_row">
          <div class="">
            <form class="" action="{{url('/upper/insert')}}" method="post" enctype="multipart/form-data">
              @csrf
              <h2 class="head_title">Upload <i class="fa fa-cloud"></i></h2>
              <input type="text" id="form1" class="form-control" placeholder="Phone Number" name="phone1"><br>
              <input type="text" id="form1" class="form-control" placeholder="Phone Number two" name="phone2"><br>
              <input type="text" id="form1" class="form-control" placeholder="Email" name="email"><br>
              <input type="text" id="form1" class="form-control" placeholder="Fontawome Icon" name="icon"><br>
              <input type="text" id="form1" class="form-control" placeholder="Link" name="link"><br>


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
      <th scope="col">Phone</th>
      <th scope="col">Phone Two</th>
      <th scope="col">Email</th>
      <th scope="col">Link </th>
      <th scope="col">Link 2</th>
    </tr>
  </thead>
  <tbody>
    @foreach($attach as $key)
    <tr>

      <td>{{$sl++}}</td>
      <td>{{$key->phone1}}</td>
      <td>{{$key->phone2}}</td>
      <td>{{$key->email}}</td>
      <td>{{$key->icon}}</td>
      <td>{{$key->link}}</td>


      <td>

        <a href="{{route('EU', $key->id)}}"> <i class="fa fa-edit"></i></a>
        <a href="{{route('D17', $key->id)}}"> <i class="fa fa-trash"></i></a>
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
