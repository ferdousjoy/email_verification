
@extends('layouts.dashboard_head')

@section('content')


<div class="">
@php
  $sohel = App\Summernote::all();
@endphp

@foreach($sohel as $joy)
{!! $joy->content !!}
@endforeach


  <form action="{{url('/summernote')}}" method="POST" enctype="multipart/form-data">
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
