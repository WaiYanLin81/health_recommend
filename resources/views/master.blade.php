<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('frondend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frondend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frondend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frondend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frondend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frondend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frondend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frondend/css/style.css')}}" type="text/css">


    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f614a0dd3589c00128107b3&product=inline-share-buttons" async="async"></script>
  


    
    

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="{{route('loginpage')}}"><img src="{{asset('frondend/img/logo.png')}}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                {{-- <img src="{{asset('frondend/img/language.png')}}" alt=""> --}}
                @guest
                <div class="text-dark"><a href="{{ route('loginpage') }}" class="text-dark">Login</a></div>
                @else
                <div class="text-uppercase">{{Auth::user()->name}}</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li>  <a class="dropdown-item btn_logout"  href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                    </li>
                </ul>
                @endguest
            </div>

        
           {{--  <div class="header__top__right__auth">
                <a href=""><i class="fa fa-user"></i>Login</a>
            </div> --}}
        

             


        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                
                 <li class=@yield('category')><a href="#">Category</a>
                                <ul class="header__menu__dropdown">
                                    @foreach($categories as $category)
                                    <li><a href="{{ route('fruitspage',$category->id) }}">{{$category->name}}</a></li>
                                    @endforeach
                                  
                                </ul>
                            </li>
                <li><a href="{{ route('blogpage') }}">Blog</a></li>
                <li><a href="{{ route('contactpage') }}">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@Heathcare.com</li>
                <li>Well Come</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>hello@Healthcare.com</li>
                                <li>Well Come</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                               @guest

                               <div class="text-uppercase"><a href="{{ route('loginpage') }}" class="text-dark">Login</a></div>
                               @else
                               <div>{{Auth::user()->name}}</div>
                               <span class="arrow_carrot-down"></span>
                               <ul>
                                <li>  <a class="dropdown-item btn_logout "  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </li>
                      </ul>
                      @endguest
                            </div>
                           {{--  <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{asset('frondend/img/logo.png')}}" alt="" width="119" height="50"></a>
                    </div>
                </div>
                <div class="col-lg-6"  >
                    <nav class="header__menu">
                        <ul>
                            <li class=@yield('home')><a href="{{ route('index') }}">Home</a></li>
                            {{-- <li><a href="./shop-grid.html">Shop</a></li> --}}
                            <li class=@yield('category')><a href="#">Category</a>
                                <ul class="header__menu__dropdown">
                                    @foreach($categories as $category)
                                    <li><a href="{{ route('fruitspage',$category->id) }}">{{$category->name}}</a></li>
                                    @endforeach
                                  
                                </ul>
                            </li>
                            <li class=@yield('blog')><a href="{{ route('blogpage') }}">Blog</a></li>
                            <li><a href="{{ route('contactpage') }}">Contact</a></li>
                            <li class=@yield('disease')><a href="{{ route('diseasepage') }}">Disease</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        {{-- <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul> --}}
                        {{-- <div class="header__cart__price">item: <span>$150.00</span></div> --}}
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

@yield('content')

<div class="sharethis-inline-share-buttons"></div>
        
 <br><footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{asset('frondend/img/logo.png')}}" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@gmail/com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> and redesigned by Best Solution
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        {{-- div class="footer__copyright__payment"><img src="{{asset('frondend/img/payment-item.png')}}" alt=""></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('frondend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frondend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frondend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frondend/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('frondend/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('frondend/js/mixitup.min.js')}}"></script>
    <script src="{{asset('frondend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frondend/js/main.js')}}"></script>
   

 
{{-- <div class="GoogleCreativeContainerClass" id="gcc_HLZhX_PBDOel3LUP1oazsAY" data-creative-load-listener=""><a target="_blank" id="img_anch_CPO_n6iL7esCFecStwAdVsMMZg" href="https://adclick.g.doubleclick.net/pcs/click?xai=AKAOjssArEk7YsJ-c_wq0yBgh4xKag_N1DsSfhzb1pBMuy2-0vyXPrB7Rq7TlY85SkhEhkix32NjYPrGnaU_p_YMWu4c4Eze-HuB_y_wMgTW0hmYOfN6U2JQEDpHzKv3sJItDSv77FjjIrWwUfx3slNtKEp-aGWb4JDAdmxEDSEAZPgNudjrIq7MDWVJqifxWFYz33UrOqM-3yWK4qFQsdt68Bl4MrXs2OY91WvbpIYoZ-jTW_vcUw24OSIW6JUxOfwITc1bd58YvKBaL171SQYfWC9CGUeAYYi-BEesf8zZiMLTZ3ZEegVNldwJ0oqcWkiZemi2g-iJHLdznYFutc-H7pjIFYnvGFXEpoEOe6ZtAlnhFzJx41Kt-rthr_e8TkY-rSZIiw0WWsr4lxLltvHZgj1BzkduGr03e_FAUxEhT24zJ4hjyTKmDd003Cg52bmq7y1J8cEywt-nqiqdEDaaqPOFph55iKu9F5IrCtg8_yEaap5hZI2ab6rqJWtpwZCP9KRM3iBXQANN-MQP36YsLLm-SMCZ3ynKyUZUyq4tP1jcAH-sQbascIHv2bP83rKUtO0-BTMepbbEOM35qzo0tp9CLvjKAGnc3Wk9XWiMMyX4JIZ02uGM6wI9xB4TmmW2zrePypXoghdsFUJCcW8zZhEe4mUK-WoOO-0eW4K4Qc9OvwMDw6dR7bJ9m0AcB46rDPXuyjOGphNuNH17lkU2wz55XdT24KA7HFJj3E8NZGUied0XJhFzUTcYUeaGuEcNq_M6MXttF0NIK_oxKuAEhpikt8wSrHk0v4kHXd9dTHqA2iJ3vg0oD7Rw5oyjiY5umlmrv53zDAwBBbbg2_27PJu7qXDzPZZ-CVsgTq__L6-hQd3hsWZPJtNOizi9LDhpGXAEtr8Pam9z9TKiaEscH04Wp7MU8q1MGjwbxWDKNsFIIHrtzisGPdTDQwMjuATXQYu0N_VjbTjBt8UkjISv_1XzzlORSpzF54aTKCYSlAJ_0ZUNR-nEphRpU8PWKe-PLcjb5GRfZuq4YJeEnCeFoPfdBD9ZnLY46yv4aA3GfHyE9ONUcZKIA47GSfHhyLwHVoEKGAS4eOzxaKbS&amp;sai=AMfl-YRmaSS42zb5e4JGd4OTu1Jm7fShw9K240IbUbZMJOmuYY9E3Y-Wg0sqCvMfJOP8mCzM85aIH0tmPs-cU5ERLEFzL4weGOBIykSBUKuD-NZTvijLz2phiUhqdmE2Ea2Ebkcf-gf_c3AqZoKPvRU79EAqA1YkisKH43pVLQ3z&amp;sig=Cg0ArKJSzEhr5nYylmHZ&amp;urlfix=1&amp;nx=485&amp;ny=36&amp;dim=728x90&amp;adurl=https://www.123rf.com/%3Futm_source%3DPS%26utm_medium%3DCPM%26utm_campaign%3DWW%26dclid%3D%25edclid!%23display08p"><img src="https://s0.2mdn.net/4646536/1-USA-PROSPECTING-VectorPrice-728x90.jpg" alt="Advertisement" border="0" width="728" height="90" style="float: right;"></a><script data-jc="74" data-jc-version="r20200914" data-jcp-a-id="img_anch_CPO_n6iL7esCFecStwAdVsMMZg">(function(){/*  Copyright The Closure Library Authors. SPDX-License-Identifier: Apache-2.0 */ var b=/^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i;var e,f=document.currentScript;e=(f=void 0===f?null:f)&&74==f.getAttribute("data-jc")?f:document.querySelector('[data-jc="74"]');if(null==e)throw Error("JSC not found 74");for(var g={},l=e.attributes,m=l.length-1;0<=m;m--){var n=l[m].name;0===n.indexOf("data-jcp-")&&(g[n.substring(9)]=l[m].value)} document.getElementById(g["a-id"]).addEventListener("mousedown",function(c){var h=c.currentTarget,a=h.querySelector("img[alt]");if(a){var d=h.href;var p=+Math.round(c.clientX-a.offsetLeft);c=+Math.round(c.clientY-a.offsetTop);a=+a.width+"x"+ +a.height;var k=/^(https?:[^:?]+[/]pcs[/]click[^/]+?)(?:&nx[^&]+&ny[^&]+&dim[^&]+)?(&adurl=.*)/.exec(d);d=k?k[1]+("&nx="+p+"&ny="+c+"&dim="+a)+k[2]:d;b.test(d)&&(h.href=d)}});}).call(this);</script></div>
 --}}


</body>

</html>

