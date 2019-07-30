@extends('layouts.dashboard_head')
@section('content')

 <h1> Welcome To Sub Menu Page</h1><hr>


 <!-- Button trigger modal -->
<a type="button" class="btn btn_info" data-toggle="modal" data-target="#exampleModalLong">
   <h6 class="head_title">Update Sub Menu</h6>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Sub Menu Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row input_row">
          <div class="">
            <form class="" action="{{url('/UPP')}}" method="post">
              @csrf
              <h2 class="head_title">Upload <i class="fa fa-cloud"></i></h2>
              <input type="hidden" id="form1" class="form-control" value="{{$attach->id}}" name="all_id"><br>
              <input type="text" id="form1" class="form-control" placeholder="Headline"  value="{{$attach->title}}" name="title"><br>
              <input type="text" id="form1" class="form-control" placeholder="link" value="{{$attach->link}}"  name="link"><br>
              <label>
                  Select Menu
              </label>
              <select class="form-control" name="menu_id">
                  <option> --Choose One-- </option>
                  @foreach($menu as $key)
                  <option value="{{$key->id}}"  @if($attach->menu_id==$key->id) selected @endif > {{$key->title}} </option>
                  @endforeach

              </select><br>

                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Insert</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div><br><br><br>

</div>

@endsection
@section('foot')
<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
@endsection
