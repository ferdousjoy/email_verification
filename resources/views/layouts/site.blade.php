<!doctype html>
<html lang="en-US">
   <head>
   <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="profile" href=" "><title>Farhan Technology & IT Solutions
</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="{{ asset('GT/css/slider.css')}}">
          <link rel="stylesheet" href="{{ asset('GT/css/owl.carousel.css')}}">
          <link rel="stylesheet" href="{{ asset('GT/css/style.css')}}">

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

 </head>
 <body class=" ">
   <div id="page" class="site">
     <header id="masthead" class="site-header wpop-inner layout3 ">
       <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
       <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
       @php
       $up = App\UpperModel::all();
       @endphp
       <div class="top-header">
         <div class="wpop-container">
           <div class="top-header-wrap clearfix">
             <div class="header-info">
               <ul>
               @foreach($up as $key)
               <li>
                 <i class="fa fa-phone"></i>
                 <a href="callto:{{$key->phone1}}, {{$key->phone2}}">{{$key->phone1}},{{$key->phone2}}</a>
               </li>
               <li>
                 <i class="fa fa-envelope"></i>
                 <a href="mailtoinfo@gtrbd.com">{{$key->email}}</a>
               </li>
               @endforeach

               </ul>
             </div>
             <div class="header-icons">

               <ul>
                   @foreach($up as $key)
                 <li>
                 <a href="{{$key->icon}}">
                     <i class="fa fa-facebook"></i>
                   </a>
                 </li>
                 <li>
                   <a href="{{$key->link}}">
                     <i class="fa fa-twitter"></i>
                   </a>
                 </li>
                  @endforeach
               </ul>
             </div>
           </div>
         </div>
       </div>
       @php
       $menu = App\MenuModel::all();
       @endphp

     </header>
        </div>
        <style media="screen">
*{
    margin:0;
    padding:0;
}
a:hover{
  text-decoration: none !important;
}
p:hover{
  text-decoration: none !important;
}
</style>
 @php
       $menu = App\MenuModel::all();
       $foot = App\FooterModel::all();
       $sub = App\SubModel::all();

       @endphp

<style>
.mli li a{
    text-transform:uppercase;
    color:#000 !important;
    background:#fff;

}
.mli li a:hover{

    color:#017bbd !important;

}
.mli li{
   padding: 0px 11px;
   backgroud:red !important;

}
.mli{
   z-index:99;

}
.banner_btntt{
    color:#fff !important;
}

}
@media (min-width:319px) and (max-width:575px) {
  .loll{
      width:49% !important;
  }
  .mli li a{
    padding-left:10% !important;
}
.header-info ul li a {
    font-size: 9px;

}
.mli{
transform: translateX(0%);
}

.site-header.layout3 .top-header {
    background: #000;
    padding: 9px 0px;
}


}


</style>

  <nav class="navbar navbar-expand-md my-nav" style="z-index:999;background:#ffffff; border-bottom: 2px solid #017bbd;">
            <div class="container">
                <a class="navbar-brand loll" href="{{url('/')}}" style="width:20%;height:100%;">
                    <img src="{{asset('GT/images/logo.png')}}" style="width:60%" class="img-fluid"  alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#na">
                    <span>Menu</span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="na">
                    <ul class="navbar-nav mli">

                        @foreach($menu as $key)
                         <li class="nav-item dropdown" >
                            <a class="nav-link  dropdown-toggle @if (App\SubModel::where('menu_id',$key->id)->count()==0) ssd @endif " href="{{$key->link}}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$key->title}}</a>
                            @php $sub_menu = App\SubModel::where('menu_id',$key->id)->get(); @endphp

                            @if(count($sub_menu)>0)
                              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="z-index:999;background:#ffffff;">
                               @foreach($sub_menu as $sm)
                    <a class="dropdown-item" href="{{url($sm->link)}}">{{$sm->title}}</a>
                                @endforeach
                              </div>
                            @endif
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </nav>
<style>
a.ssd::after{border:none;}
.nav-item  .dropdown-menu a.dropdown-item{
padding: 9px 20px;

}
.dropdown-item{
  line-height: normal;
  border: none;
}
.dropdown-item:hover{
  background: none;
}
.dropdown-menu{
    z-index:99;
}
</style>

 <script>
$('ul li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>



@yield('content')
	<footer class="footer-6 unpad--bottom  bg--dark ">
                <div class="container">
                    <div class="row frow">
                        <div class="col-md-6 col-lg-3">
                            <h6 class="type--uppercase">About Us</h6>
                              @foreach($foot as $key)
                            <p>
                                {{$key->detail}}
                            </p>
                             @endforeach
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h6 class="type--uppercase">Contact Us</h6>
                            <div class="tweets-feed tweets-feed-2">
                                <p>Farhan Technology & IT Solutions</p>
                                <p><i class="fa fa-search">&nbsp</i> RF Zahura Tower(G, Floor),
1401, Sk Mujib Road, Chomuhani,</p>
                                <p><i class="fa fa-phone"> &nbsp </i> 01993-607000</p>



                                <p><i class="fa fa-envelope-open"> &nbsp </i>infoftsbd.net@gmail.com</p>


                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h6 class="type--uppercase">Gallery</h6>
                            <div class="gal">
                                <img  class="img-fluid" src="{{asset('GT/images/er.png')}}">
                                <img  class="img-fluid" src="{{asset('GT/images/er.png')}}">
                                <img  class="img-fluid" src="{{asset('GT/images/er.png')}}">
                                <img  class="img-fluid" src="{{asset('GT/images/er.png')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h6 class="type--uppercase">Summary</h6>
                         <div class="sum">
                              <ul>
                         @foreach($menu as $key)
                         <li>
                            <a href="{{$key->link}}">{{$key->title}}</a>
                        </li>
                        @endforeach
                         </ul>
                         </div>


                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <style>
                .sum ul{
                        margin: 0;
                        padding: 0;
                    }

                    .sum ul li{
                        list-style-type: none;
                        padding-bottom: 11px;
                        border-bottom: 1px solid #fff;
                        color: #fff;
                        margin-bottom: 10px;
                         text-align:left;
                    }
                    .sum ul li a{
                        color: #fff;
                    }
                     .gal{
                        margin: 0;
                        padding: 0;
                    }
                    .gal img{
                        margin-left:10px;
                        margin-bottom:10px;
                    }
                </style>
                <!--end of container-->

                <div class="footer__lower text-center-xs ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="type--fine-print">&copy;
                                    <span class="update-year"></span> Digital Innovation &mdash; All Rights Reserved</span>
                            </div>
                            <div class="col-md-6 text-right text-center-xs">
                                <ul class="social-list list-inline">
                                    <li>
                                        <a href="#">
                                            <i class="socicon socicon-google icon icon--xs"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="socicon socicon-twitter icon icon--xs"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="socicon socicon-facebook icon icon--xs"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="socicon socicon-instagram icon icon--xs"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of container-->
                </div>
            </footer>


   <script src="{{ asset('GT/js/main.js')}}"></script>
   <script src="{{ asset('GT/js/.owl.carousel.js')}}"></script>
    @yield('footer_scripts')


 </body>
</html>
