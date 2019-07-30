@extends('layouts.site')
@section('content')

<section style="padding:6% 4%; background:#404040">
  <div class="jon">
    <h1 style="padding-left:4%;color:#fff;font-weight:bold">Service - {{$service->ttile}}</h1>
  </div>
</section>

     <section class="service_section">
    <div class="container">


        <div class="row">
          @php $i=0; @endphp
          @foreach($data as $data=>$mydata)
          @if($i%2==0)
                <div class="col-lg-10 col-md-10 col-sm-6 m-auto" >
                   <div class="row" style="margin-bottom:100px;">
                       <div class="col-lg-6">
                         <div class="main_hit">
                            @php $image = App\SpecificModel::where('title',$mydata->title)->first(); @endphp
                          <div class="service_img_main"><img src="{{ asset($image->all_img) }}"  class="img-fluid" alt=""></div>
                        </div>
                       </div>

                       <div class="col-lg-6">
                            <div class="product_feature">
                           <h2 class="product_title"> {{$mydata->title}}</h2>
                           @php $sohel = App\SpecificModel::where('title',$mydata->title)->first();
                           $list = App\SpecificModel::where('title',$mydata->title)->get(); @endphp
                           <h4>{{ $sohel->text }}</h4>
                            <ul>
                              @foreach($list as $list_item)
                                <li>{{ $list_item->list }}</li>
                              @endforeach
                            </ul>
                        </div>
                       </div>

                   </div>
                </div>
                @else

                <div class="col-lg-10 col-md-10 col-sm-6 m-auto">
                   <div class="row">
                        <div class="col-lg-6">
                            <div class="product_feature">
                           <h2 class="product_title">  {{$mydata->title}}</h2>
                           @php $sohel = App\SpecificModel::where('title',$mydata->title)->first();
                           $list = App\SpecificModel::where('title',$mydata->title)->get(); @endphp
                        <h4>{{ $sohel->text }}</h4>
                            <ul>
                              @foreach($list as $list_item)
                                <li>{{ $list_item->list }}</li>
                              @endforeach
                            </ul>
                        </div>
                       </div>
                       <div class="col-lg-6">
                         <div class="main_hit">
                           @php $image = App\SpecificModel::where('title',$mydata->title)->first(); @endphp
                          <div class="service_img_main"><img src="{{ asset($image->all_img) }}"  class="img-fluid" alt=""></div>
                        </div>
                       </div>

                   </div>
                </div>
                @endif
               @php $i++; @endphp
                @endforeach
        </div>
    </div>
    </section>


@endsection
