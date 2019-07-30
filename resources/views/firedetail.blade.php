@extends('layouts.site')
<style media="screen">
  .text_of_service{
    font-size: 14px;
line-height: 24px;
font-style: italic;
  }
</style>
@section('content')
<section class="service_section">
    <div class="container">

        <div class="row">
          @php $i=0; @endphp
          @foreach($data as $key)
          @if($i%2==0)
                <div class="col-lg-10 col-md-10 col-sm-6 m-auto">

                   <div class="row" style="margin-bottom:120px">
                       <div class="col-lg-6">
                         <div class="main_hit">
                          <div class="service_img_main"><img src="{{asset($key->all_img)}}"  class="img-fluid" alt=""></div>
                        </div>
                       </div>

                       <div class="col-lg-6">
                            <div class="product_feature">
                           <h2 class="product_title">{{$key->title}}</h2>
                           <h4>{{$key->text}}</h4>
                            <p class="text_of_service">
                             {{$key->full_text}}
                            </p>
                        </div>
                       </div>

                   </div>
                </div>
                  @else
                <div class="col-lg-10 col-md-10 col-sm-6 m-auto">
                   <div class="row">
                        <div class="col-lg-6">
                            <div class="product_feature">
                              <h2 class="product_title">{{$key->title}}</h2>
                              <h4>{{$key->text}}</h4>
                               <p class="text_of_service">
                                {{$key->full_text}}
                               </p>
                        </div>
                       </div>
                       <div class="col-lg-6">
                         <div class="main_hit">
                          <div class="service_img_main"><img src="{{asset($key->all_img)}}"   class="img-fluid" alt=""></div>
                        </div>
                       </div>



                   </div>
                </div>

        </div>





@endif
   @php $i++; @endphp
        @endforeach
    </div>
    </section>


@endsection
