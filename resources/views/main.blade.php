@extends('layouts.site')
@section('site')
<section class="hero-area blue_gradiant" id="home">
     <div class="container tst-carousel owl-carousel">
       @foreach($ban as $key)
       <div class="row align-items-center">
           <div class="col-lg-7">
               <div class="hero-content">
                   <h2>{{$key->title }}</h2>
                   <p>{{$key->detail}}</p>
                   <div class="link"><span>Call Us</span><i class="fa fa-phone"></i><span class="number">++0123456789</span></div>
               </div>
           </div>
           <div class="col-lg-4 d-none d-lg-block">
               <div class="hero-right-thumb">
                   <div class="hr-img">
                       <img src="{{asset($key->allimg)}}">
                   </div>
               </div>
           </div>
       </div>
       @endforeach
     </div>
   </section>
 <!-- hero area end -->
 <!-- about area start -->
 <section class="about-area blue_gray ptb--100" id="about">
     <div class="container">
         <div class="section-title">
             <h2>About Me</h2>
             <img src="{{asset('site/images/line.png')}}" alt="icon">
         </div>
         @foreach($ab as $key)
         <div class="row align-items-center">
             <div class="col-md-6">
                 <div class="abt-content">
                     <h2>{{$key->title}}</h2>
                     <p> {{$key->detail}}</p>

                 </div>
             </div>
             <div class="col-md-6">
                     <div class="abt-slide-item">
                         <img src="{{asset($key->allimg)}}">
                         <a class="expand-video" href="https://www.youtube.com/watch?v=nXQw7ggHufo"><i class="fa fa-play"></i></a>
                     </div>
             </div>
         </div>
         @endforeach

     </div>
 </section>
 <!-- about area end -->
 <!-- experience area start -->
 <div class="experience-area blue_gray ptb--100  pt--none">
     <div class="container">
         <div class="section-title">
             <h2>Experience</h2>
             <img src="{{asset('site/images/line.png')}}" alt="icon">
         </div>
         @foreach($ex as $key)
         <div class="row">
             <div class="col-xl-1 d-none d-xl-block">
                 <div class="exp-year">
                     <p>{{$key->title}}
                         <br>{{$key->year}}</p>
                 </div>
             </div>
             <div class="col-lg-5 col-md-4 col-sm-6 offset-lg-1 offset-xl-0">
                 <div class="single-xp mb-95">
                     <h3>{{$key->maintitle}}</h3>
                     <p>{{$key->detail}}</p>
                 </div>
             </div>
             <div class="col-xl-2 d-none d-xl-block">
                 <div class="exp-year right-year">
                     <p>{{$key->title2}}
                         <br>{{$key->year2}}</p>
                 </div>
             </div>
             <div class="col-lg-4 col-md-4 col-sm-6  offset-lg-1 offset-xl-0">
                 <div class="single-xp">
                     <h3>{{$key->maintitle2}}</h3>
                     <p>{{$key->detail2}}</p>
                 </div>
             </div>
             <div class="col-lg-5 col-md-4 col-sm-6  offset-lg-1">
                 <div class="single-xp">
                     <h3>{{$key->maintitle3}}</h3>
                        <p>{{$key->detail3}}</p>
                 </div>
             </div>
             <div class="col-lg-4  col-md-4 col-sm-6  offset-lg-2">
                 <div class="single-xp">
                        <h3>{{$key->maintitle4}}</h3>
                       <p>{{$key->detail4}}</p>
                 </div>
             </div>
         </div>
         @endforeach

     </div>
 </div>
 <!-- experience area end -->
 <!-- portfolio area start -->
 <section class="portfolio-area blue_dark pt--100 pb--80" id="portfolio">
     <div class="container">
         <div class="section-title">
             <h2>Our Products</h2>
           <img src="{{asset('site/images/line.png')}}" alt="icon">
         </div>
         <div class="portfolio-menu">
             <button class="active" data-filter="*">All</button>
             <button data-filter=".new">Sand</button>
             <button data-filter=".web">Brick</button>
             <button data-filter=".design">Road</button>
             <button data-filter=".print">Cement</button>
             <button data-filter=".video">VIDEO</button>
         </div>
         <div class="portfolio-masonary row" id="container">
           @foreach($pr as $key)
           <div class="prt-item col-lg-3 col-md-4 col-sm-6">
               <div class="prt-sinle">
                   <a class="expand-img" src="{{asset('site/images/img1.jpg')}}"><img src="{{asset($key->allimg)}}" alt="image">
                   <p>{{$key->name}}</p></a>
               </div>
           </div>
           @endforeach


         </div>
     </div>
 </section>
 <!-- portfolio area end -->
 <!-- service area start -->
 <section class="service-area blue_dark pt--100 pb--50 pt--none" id="service">
     <div class="container">
         <div class="section-title">
             <h2>Services</h2>
              <img src="{{asset('site/images/line.png')}}" alt="icon">
         </div>
         <div class="row">
           @foreach($ser as $key)
           <div class="col-lg-3 col-md-6">
               <div class="single-service">
                   <div class="icon"><img src="{{asset('site/images/icon2.png')}}" alt="icon"></div>
                   <h2>{{$key->title}}</h2>
                   <p>{{$key->detail}}</p>
               </div>
           </div>
           @endforeach


         </div>
     </div>
 </section>
 <!-- service area end -->
 <!-- testimonal area start -->
 <div class="testimonial-area ptb--100 gradiant-overlay" >
     <div class="container">
         <div class="row">
             <div class="col-md-10 offset-md-1">
                 <div class="tst-carousel owl-carousel">
                   @foreach($sli as $key)
                     <div class="tst-single">
                         <img src="{{asset($key->allimg)}}" alt="image">
                         <p>{{$key->detail}}</p>
                         <h4>{{$key->designation}}</h4>
                         <h5>{{$key->name}}</h5>
                     </div>
                      @endforeach
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- testimonal area end -->
 <!-- client area start -->
 <section class="client-area ptb--80 blue_dark" id="client">
     <div class="container">
         <div class="row">
             <div class="client-list owl-carousel">
               @foreach($partner as $key)
                <a href="#"><img src="{{$key->allimg}}"  alt="image"></a>
               @endforeach


             </div>
             <h2 class="d-none">client carousel</h2>
         </div>
     </div>
 </section>
 <!-- client area end -->
 <!-- feature blog area start -->
 <section class="feature-blog ptb--100 blue_gray" id="blog">
     <div class="container">
         <div class="section-title">
             <h2>Latest news</h2>
             <img src="{{asset('site/images/line.png')}}" alt="icon">
         </div>
         <div class="row">


@foreach($blog as $key)
<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="single-blog">
        <div class="blog-thumb">
            <a href="blog.html"><img src="{{asset($key->allimg)}}"  alt="image"></a>
            <span>By <span class="theme-text">{{$key->author}}</span> {{$key->created_at}}</span>
        </div>
        <div class="blog-content">
            <h2><a href="blog.html">{{$key->name}}</a></h2>
            <p> {{$key->detail}}</p>
        </div>
    </div>
</div>
@endforeach

         </div>
     </div>
 </section>
 <!-- feature blog area end -->
 <!-- contact area start -->
 <section class="contact-area ptb--100 blue_dark" id="contact">
     <div class="container">
       <div>
         @if (session('success'))
               <div class="alert alert-info">
       {{ session('success')}}
     </div> <br>
               @endif
       </div>
         <div class="section-title">
             <h2>Get in touch</h2>
             <img src="{{asset('site/images/line.png')}}" alt="icon">
         </div>
         <div class="row">
             <div class="col-md-10 offset-md-1">
                 <div class="contact-form">
                     <form action="/message" method="post">
                       @csrf
                         <div class="row">
                             <div class="col-md-6">
                                 <input type="text" placeholder="Name" name="name">
                             </div>
                             <div class="col-md-6">
                                 <input type="email" placeholder="Email Address" name="email">
                             </div>
                             <div class="col-md-6">
                                 <input type="text" placeholder="Phone Number" name="phone">
                             </div>
                             <div class="col-md-6">
                                 <input type="text" placeholder="Subject" name="subject">
                             </div>
                             <div class="col-md-12">
                                 <textarea name="message" id="msg" placeholder="Message"></textarea>
                             </div>
                             <div class="col-12 text-center">
                                 <button type="submit" id="submit">Send Message</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </section>

@endsection
@section('footer_scripts')
<script type="text/javascript">

</script>
@endsection
