
@extends('layouts.dashboard_head')

@section('content')
<h1>Welcome To Our Service Detail</h1>


<div class="">
@php
  $sohel = App\Summernote::all();
@endphp



  <form action="{{url('/our/service/detail/service')}}" method="POST" enctype="multipart/form-data">
       {{ csrf_field() }}
       <textarea name="summernoteInput" id="summernote" class="summernote"></textarea>
       <br>
       <button type="submit">Submit</button>
   </form>
  <script>
     $(document).ready(function() {
 $('#summernote').summernote({
   height:350,
 });
});
   </script>
</div>
@endsection
