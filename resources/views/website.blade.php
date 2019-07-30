
@extends('layouts.site')

 @php
       $menu = App\MenuModel::all();
       $foot = App\FooterModel::all();
       $sub = App\SubModel::all();
       @endphp
@section('content')
<section>
  <div id="demo" class="carousel slide" data-ride="carousel">


    <!-- Wrapper for slides -->
    <div class="carousel-inner banner_slider">
         <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
      @php $i=0; @endphp
      @foreach($banner as $key)
      <div class="carousel-item oplo {{ ($i==0)? 'active' : '' }}">
       <div class="sss"><img src="{{$key->allimg}}"class="img-fluid" style="width:100%;"></div>
       <div class="banner_item2">
           <h1>{{$key->title}}</h1>
           <p>{{$key->text}}</p>
           <a class="banner_btntt"> Detail</a>
       </div>
      </div>
      @php $i++; @endphp
      @endforeach


    </div>

    <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  </div>

</section>



<!-- ================ == ===================================================================

================================================================================================-->
						<div id="pg-2869-1"  class="panel-grid panel-has-style" >
							<div class="service-layout panel-row-style panel-row-style-for-2869-1" id="service" >
								<div id="pgc-2869-1-0"  class="panel-grid-cell" >
									<div id="panel-2869-1-0-0" class="so-panel widget widget_siteorigin-panels-builder panel-first-child panel-last-child" data-index="1" >
										<div id="pl-w5cbacc6628f36"  class="panel-layout" >
											<div id="pg-w5cbacc6628f36-0"  class="panel-grid panel-has-style" >
												<div class="section-title-wrap wow fadeInUp panel-row-style panel-row-style-for-w5cbacc6628f36-0" >
													<div id="pgc-w5cbacc6628f36-0-0"  class="panel-grid-cell" >
														<div id="panel-w5cbacc6628f36-0-0-0" class="so-panel widget widget_sow-headline panel-first-child panel-last-child" data-index="0" >
															<div class="panel-widget-style panel-widget-style-for-w5cbacc6628f36-0-0-0" >
																<div class="so-widget-sow-headline so-widget-sow-headline-default-8a9ff60e0bdf">
																	<div class="sow-headline-container ">
																		<h1 class='sow-headline'>Our Services</h1>
																		<div class="decoration">
																			<div class="decoration-inside"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
            <section>

              <div class="container">
                <div class="row gg">
                  @foreach($ser as $key)

                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <a   href="{{url('/services/'.$key->id)}}">
                      <div class="service_box all_a">
                        <div class=""><img src="{{$key->allimg}}" alt="" class="img-fluid" style="height:118px;width:150px"></div>
                        <h6>{{$key->ttile}}</h6>
                      </div>
                    </a>

                  </div>
                    @endforeach

                </div>

              </div>
            </section>




						<div id="pg-2869-2"  class="panel-grid panel-has-style" >
							<div class="service-layoutmPS2id-clicked mPS2id-target mPS2id-highlight panel-row-style panel-row-style-for-2869-2" id="oracle" >
								<div id="pgc-2869-2-0"  class="panel-grid-cell" >
									<div id="panel-2869-2-0-0" class="so-panel widget widget_sow-headline panel-first-child" data-index="2" >
										<div class="section-title-wrap wow fadeInUp panel-widget-style panel-widget-style-for-2869-2-0-0" >
											<div class="so-widget-sow-headline so-widget-sow-headline-default-c5ae011493a6">
												<div class="sow-headline-container ">
													<h1 class='sow-headline'>Oracle Solution</h1>
													<div class="decoration">
														<div class="decoration-inside"></div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<style>
									.oracla_holder{
									    position:relative;
									    text-align:center;
									    background:#fff;
									    box-shadow:0 0 4px #ccc;
									    padding:20px 0;
									    margin-bottom:20px;

									}
									.oracla_holder:hover:after{
									    background:red;
									}
									.oracla_holder::after{
									   position:absolute;
									   content:'';
									   top:0;
									   bottom:0;
									   left:0;
									   right:98%;
									   background:#404040;

									}
									.or-row{
									    margin-left:5%;
									}
									.oracla_holder h4{
									    line-height: 1.375em;
                                         color: #002e5b;
                                        text-shadow: 0 2px 2px rgba(0, 0, 0, 0.01);
                                        margin: 1.3em 0;
                                        margin-bottom: 0.1em;
                                        font-family: Raleway;
                                        font-weight: 600;
                                        font-size:20px;
									}
									   h1{
									       font-size: 2em;

									   }
									</style>
									<div class="container">
									    <div class="row or-row">
									         @foreach($sol as $key)
									        <div class="col-lg-5 m-0 offset-lg-3">
									            <a href="{{url('/solution/detail', $key->id)}}" target="_blank">
                                <div class="oracla_holder">
									            <img src="{{$key->allimg}}" class="img-fluid" alt="" width="150" height="150">
									            <h4 style="text-align: center">{{$key->title}}</h4>
									        </div>
                              </a>
									        </div>
									        @endforeach
									    </div>
									    </div>
								</div>
							</div>
						</div>


						<div id="pg-2869-3"  class="panel-grid panel-has-style" >
							<div class="service-layout panel-row-style panel-row-style-for-2869-3" id="gtsolution" >
								<div id="pgc-2869-3-0"  class="panel-grid-cell" >


									<div id="panel-2869-3-0-0" class="so-panel widget widget_sow-headline panel-first-child" data-index="4" >
										<div class="section-title-wrap wow fadeInUp panel-widget-style panel-widget-style-for-2869-3-0-0" >
											<div class="so-widget-sow-headline so-widget-sow-headline-default-c5ae011493a6">
												<div class="sow-headline-container ">
													<h1 class='sow-headline'>FD Solution</h1>
													<div class="decoration">
														<div class="decoration-inside"></div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<div id="panel-2869-3-0-1" class="so-panel widget widget_siteorigin-panels-builder panel-last-child" data-index="5" >
										<div class="service-row wow fadeInRight panel-widget-style panel-widget-style-for-2869-3-0-1" >
											<div id="pl-w5c03655fe8b26"  class="panel-layout" >
												<div id="pg-w5c03655fe8b26-0"  class="panel-grid panel-has-style" >
													<div class="panel-row-style panel-row-style-for-w5c03655fe8b26-0" >


													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
            <section>
              <div class="container">
                <div class="row">
                  @foreach($gt as $key)

                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service_box">
                      <div class=""><img src="{{$key->allimg}}" alt="" class="img-fluid"></div>
                      <h1>{{$key->title}}</h1>
                      <p>{{$key->text}}</p>
                    </div>
                  </div>
                    @endforeach

                </div>

              </div>
            </section>













						<div id="pg-2869-4"  class="panel-grid panel-has-style " >
							<div class="service-layout panel-row-style panel-row-style-for-2869-4" id="ApparelCAD" >
								<div id="pgc-2869-4-0"  class="panel-grid-cell" >
									<div id="panel-2869-4-0-0" class="so-panel widget widget_sow-headline panel-first-child" data-index="6" >
										<div class="section-title-wrap wow fadeInUp panel-widget-style panel-widget-style-for-2869-4-0-0" >
											<div class="so-widget-sow-headline so-widget-sow-headline-default-c5ae011493a6">
												<div class="sow-headline-container ">
													<h1 class='sow-headline'>Apparel CAD Solution</h1>
													<div class="decoration">
														<div class="decoration-inside"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
                  <div class="container">
                    <div class="row">
                      @foreach($cad as $key)

                      <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="service_box">
                          <div class=""><img src="{{$key->allimg}}" alt="" class="img-fluid"></div>
                          <h1>{{$key->title}}</h1>
                          <p>{{$key->text}}</p>
                        </div>
                      </div>
                        @endforeach

                    </div>
                  </div>












								</div>
							</div>
						</div>





















						<div id="pg-2869-5"  class="panel-grid panel-has-style" >
							<div class="service-layout panel-row-style panel-row-style-for-2869-5" id="biometric" >
								<div id="pgc-2869-5-0"  class="panel-grid-cell" >
									<div id="panel-2869-5-0-0" class="so-panel widget widget_sow-headline panel-first-child" data-index="8" >
										<div class="section-title-wrap wow fadeInUp panel-widget-style panel-widget-style-for-2869-5-0-0" >
											<div class="so-widget-sow-headline so-widget-sow-headline-default-c5ae011493a6">
												<div class="sow-headline-container ">
													<h1 class='sow-headline'>Biometric Solution</h1>
													<div class="decoration">
														<div class="decoration-inside"></div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<style>
									.bio_box{
									    background:#fff;
									    transition:.5s;
									}
									.bio_box:hover{
									     background:#e4e4e4;
									}
									.bio_box h1{
									     color:#002e5b;
									}
                  .bio_box p{
                       color:#434244;
                       font-weight:bold;
                  }
									</style>

									<div class="container">
                    <div class="row">
                      @foreach($bio as $key)

                      <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{url('/biometric/detail',$key->id)}}">
                          <div class="service_box bio_box">
                            <div class=""><img src="{{$key->allimg}}" alt="" style="width:150px;height:150px;"class="img-fluid"></div>
                            <h1>{{$key->title}}</h1>
                            <p>{{$key->text}}</p>
                          </div></a>
                      </div>
                        @endforeach

                    </div>
                  </div>

								</div>
							</div>
						</div>
						<div id="pg-2869-6"  class="panel-grid panel-has-style" >
							<div class="service-layout panel-row-style panel-row-style-for-2869-6" id="ups" >
								<div id="pgc-2869-6-0"  class="panel-grid-cell" >
									<div id="panel-2869-6-0-0" class="so-panel widget widget_sow-headline panel-first-child" data-index="10" >
										<div class="section-title-wrap wow fadeInUp panel-widget-style panel-widget-style-for-2869-6-0-0" >
											<div class="so-widget-sow-headline so-widget-sow-headline-default-c5ae011493a6">
												<div class="sow-headline-container ">
													<h1 class='sow-headline'>Online UPS</h1>
													<div class="decoration">
														<div class="decoration-inside"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<style>
									.ups_box{
									    position:relative;
									    background:#fff;
									    padding: 34px 75px;
									    transition:.5s;
									}
									.ups_box h1{
									    color: #002e5b;
									    font-size:20px;
									}
									.ups_box:hover:after{
									    right:98%;
									}
									.ups_box::after{
									   position:absolute;
									   content:'';
									   top:0;
									   bottom:0;
									   left:0;
									   right:100%;
									   background:#404040;
									   transition:.5s;

									}
									</style>

	<div class="container">
                    <div class="row">
                      @foreach($ups as $key)

                      <div class="col-lg-3 col-md-4 col-sm-6">
                          <a href="{{url('/up/detail',$key->id)}}">
                        <div class="service_box ups_box">
                          <div class=""><img src="{{$key->allimg}}" alt="" class="img-fluid" style="width:150px; height:150px"></div>
                          <h1>{{$key->title}}</h1>
                        </div>
                        </a>
                      </div>


                        @endforeach

                    </div>
                  </div>


								</div>
							</div>
						</div>


            <div id="pg-2869-7"  class="panel-grid panel-has-style container" >
							<div class="service-layout panel-row-style panel-row-style-for-2869-7" id="firePro" >

								<div id="pgc-2869-7-0"  class="panel-grid-cell" >
									<div id="panel-2869-7-0-0" class="so-panel widget widget_sow-headline panel-first-child" data-index="12" >
										<div class=" section-title-wrap wow fadeInUp panel-widget-style panel-widget-style-for-2869-7-0-0" >
											<div class="so-widget-sow-headline so-widget-sow-headline-default-c5ae011493a6">
												<div class="sow-headline-container ">
													<h1 class='sow-headline'>Fire Detection &amp; Protection</h1>
													<div class="decoration">
														<div class="decoration-inside"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
                  <div class="row">
                    @foreach($fir as $key)

                    <div class="col-lg-4 col-md-4 col-sm-6">
                      <a href="{{url('/fire/detail',$key->id)}}">
                        <div class="service_box">
                          <div class=""><img src="{{$key->allimg}}" alt="" class="img-fluid" style="width:150px;height:150px"></div>
                          <h4>{{$key->title}}</h4>
                          <p>{{$key->text}}</p>
                        </div>
                      </a>
                    </div>
                      @endforeach
                  </div>

  </div>
</div>
</div>

					</div>
				</div>
			</div>

			<style>
                .bg--dark {
    background: #252525;
    padding:40px 0;
}
.type--uppercase{
    color:#fff;
     text-transform: uppercase;
     font-size:16px;
}
.frow{
    color:#fff;
}
</style>
<section id="partners">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <div class="container">
    <div class="customer-logos slider">
      @foreach($par as $key)
        <div class="slide"><img src="{{$key->allimg}}" class="" alt="clt"></div>
      @endforeach
     </div>
</div>
 <script>
 $(document).ready(function(){
     $('.customer-logos').slick({
         slidesToShow: 5,
         slidesToScroll: 1,
         autoplay: true,
         autoplaySpeed: 1500,
         arrows: false,
         dots: false,
         pauseOnHover: false,
         responsive: [{
             breakpoint: 768,
             settings: {
                 slidesToShow: 4
             }
         }, {
             breakpoint: 520,
             settings: {
                 slidesToShow: 3
             }
         }]
     });
 });
 </script>
 <style>
 h2{

 }
 /* Slider */

 .slick-slide {
     margin: 0px 20px;
 }

 .slick-slide img {
     width: 100%;
 }

 .slick-slider
 {
     position: relative;
     display: block;
     box-sizing: border-box;
     -webkit-user-select: none;
     -moz-user-select: none;
     -ms-user-select: none;
             user-select: none;
     -webkit-touch-callout: none;
     -khtml-user-select: none;
     -ms-touch-action: pan-y;
         touch-action: pan-y;
     -webkit-tap-highlight-color: transparent;
 }

 .slick-list
 {
     position: relative;
     display: block;
     overflow: hidden;
     margin: 0;
     padding: 0;
 }
 .slick-list:focus
 {
     outline: none;
 }
 .slick-list.dragging
 {
     cursor: pointer;
     cursor: hand;
 }

 .slick-slider .slick-track,
 .slick-slider .slick-list
 {
     -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
         -ms-transform: translate3d(0, 0, 0);
          -o-transform: translate3d(0, 0, 0);
             transform: translate3d(0, 0, 0);
 }

 .slick-track
 {
     position: relative;
     top: 0;
     left: 0;
     display: block;
 }
 .slick-track:before,
 .slick-track:after
 {
     display: table;
     content: '';
 }
 .slick-track:after
 {
     clear: both;
 }
 .slick-loading .slick-track
 {
     visibility: hidden;
 }

 .slick-slide
 {
     display: none;
     float: left;
     /* height: 100%; */
     min-height: 1px;
 }
 [dir='rtl'] .slick-slide
 {
     float: right;
 }
 .slick-slide img
 {
     display: block;
 }
 .slick-slide.slick-loading img
 {
     display: none;
 }
 .slick-slide.dragging img
 {
     pointer-events: none;
 }
 .slick-initialized .slick-slide
 {
     display: block;
 }
 .slick-loading .slick-slide
 {
     visibility: hidden;
 }
 .slick-vertical .slick-slide
 {
     display: block;
     height: auto;
     border: 1px solid transparent;
 }
 .slick-arrow.slick-hidden {
     display: none;
 }
 </style>

</section>



      @endsection
      @section('footer_scripts')
      <script>
      $(document).ready(function(){
     $('.banner_slider2').owlCarousel();
   });

      </script>
       <script>
      $(document).ready(function(){
     $('.owl-carousel').owlCarousel();
   });

      </script>

      @endsection

			<!-- #content -->
