@extends('layouts.site')
@section('content')
<style media="screen">
  .ff{
    margin-bottom:70px !important;
  }
</style>

<section style="padding:6% 4%; background:#404040">
  <div class="jon">
    <h1 style="padding-left:4%;color:#fff;font-weight:bold">Service - All</h1>
  </div>
</section>




     <section class="service_section">
    <div class="container">


        <div class="row">
          @foreach($attach as $joy)
          <div class="col-lg-10 m-auto ff">{!! $joy->content !!}</div>
          @endforeach


    </div>
    </section>


@endsection
