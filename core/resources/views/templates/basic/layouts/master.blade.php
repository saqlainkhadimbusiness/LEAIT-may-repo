<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $general->sitename}} - {{__(@$page_title)}} </title>
    <link rel="shortcut icon" href="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}" type="image/x-icon">
    @include('partials.seo')

    <link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/line-awesome.min.css')}}">

    @stack('style-lib')
    <link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/custom.css')}}">
    @stack('css')
    <link rel="stylesheet" href='{{ asset($activeTemplateTrue."frontend/css/color.php?color=$general->base_color")}}'>


    <link href="https://www.learnandearnint.com/assets/front/styles.css" rel="stylesheet" type="text/css" />



    <script type="text/javascript" src="https://www.learnandearnint.com/assets/front/jquery.js"></script>
    <script type="text/javascript" src="https://www.learnandearnint.com/assets/front/jcarousellite_1.js"></script>



    @stack('style')




    <style>
html, body {
   max-width: 100%;
   overflow-x: hidden;
}




        .header-area .rightarea {
            width: 577px;
            float: right;
            margin: 21px 0px 15px 0px;
        }

        a {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            text-decoration: none;
            color: #00F;
        }


        .contact-info {
            overflow: initial;
        }




    </style>
</head>

<body>

@stack('facebook')

<div class="overlay"></div>
<a href="#0" class="scrollToTop"><i class="flaticon-arrow"></i></a>
<div class="overlayer" id="overlayer">
    <div class="loader">
        <div class="loader-inner"></div>
    </div>
</div>

<header>


    <div class="header-top" style="background:#000; display: none">
        <div class="container">
            <div class="header-top-area" style="padding:2px 0 !important;">


                <div class="header-top-item">
                    <!--<a href="Mailto:{{@$contact->data_values->email_address}}"><i class="fa fa-envelope"></i>{{@$contact->data_values->email_address}}</a>-->
                </div>
                <div class="header-top-item">
                    <!--<a href="tel:{{@$contact->data_values->contact_number}}"><i class="fa fa-mobile-alt"></i>{{@$contact->data_values->contact_number}}</a>-->
                </div>

                <div class="header-top-item ml-auto d-none d-sm-block" style="color:white;padding: 4px 32px !important;">
                   Mail us : <a href="Mailto:{{@$contact->data_values->email_address}}"><!--<i class="fa fa-envelope"></i>-->{{@$contact->data_values->email_address}}</a>
                </div>



            </div>
        </div>
    </div>









    <div id="Header">
        <div id="Header-Container">
            <div id="Header-Container-Top" >
                Mail us : <a href="mailto:{{@$contact->data_values->email_address}}">{{@$contact->data_values->email_address}}</a></div><!--Header-Container-Top-->
            <div class="clear"></div>
            <div id="Header-Container-Top2">
                <div class="logo"> <a href="{{url('/')}}"><h3 style="font-size: 20px;">Learn and Earn IT International</h3></a>
                    <div class="learn_marquee">
                        <marquee direction="left" scrollamount="3" width="100%">Learn and Earn Anywhere</marquee>
                    </div>
                </div>
                <div class="rightarea">
                    <div class="loginarea">


                        <a href="{{route('user.register')}}">Register</a> <span>|</span> <a href="{{route('user.login')}}">Log In</a>

                    </div><!--loginarea-->
                    <div class="search" style="display: none">
                        <form action="https://www.learnandearnint.com/search-results" name="frmsearch" id="frmsearch" method="post">
                            <input name="txtsearch" id="txtsearch" type="text" class="searchbox">
                            <input type="image" src="https://www.learnandearnint.com/assets/front/imgs/icon-search.png" width="15" height="20" class="iconsearch">
                        </form>
                    </div><!--search-->
                </div><!--rightarea-->
                <input type="checkbox" id="punch" class="toggle">
                <label for="punch" class="top-nav">Navigation <span><img src="https://www.learnandearnint.com/assets/front/imgs/menu_bar.png" style="cursor:pointer"></span></label>
                <div class="window">
                    <div id="Top-Nav">
                        <ul>

                            <li><a href="{{url('/')}}"><span>Home</span></a></li>

                            <li><a href="{{route('about')}}"><span>Who we are</span></a></li>

                            <li><a href="{{route('payouts')}}"><span>Recent Payouts</span></a></li>

                            <li><a href="{{route('referral')}}"><span>Referral Contests</span></a></li>

                            <li><a href="https://learn.dreamshub.com.pk/faq"><span>FAQ</span></a></li>

                            <li><a href="{{route('terms')}}"><span>Terms</span></a></li>

                            <li class="download"><a href="#"><span>Downloads</span></a></li>
                        </ul>

                        <!--<div style="width:300px;position:absolute;top:115px;left:400px;text-decoration:blink;z-index:10001;color:#F00;text-align:center;font-size:25px;">
                        <strong class="blink">LAEI Site Beta Phase</strong>
                        </div>-->
                    </div>
                </div><!--Top-Nav-->
                <div class="clear"></div>
            </div><!--Header-Container-Top2-->
            <div class="clear"></div>
        </div><!--Header-Container-->
    </div>













    <div class="header-bottom" style="background:#fff !important; display: none">
        <div class="container" style="padding-left:0px;padding-right:0px;">
            <div class="header-area" style="padding:2px 0px !important;">
                <div class="logo" style="width:165px !important;">
                    <a href="{{url('/')}}"><img src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}"
                                                alt="logo">
                                               <!--<h3 style="font-size:20px;color:white;font-weight:700">LEARN AND EARN IT</h3>-->
                                                </a>
                    <div class="learn_marquee">
                        <marquee direction="left" scrollamount="3" width="100%">A New Way of Learning with Earning</marquee>
                    </div>
                </div>


                <div class="rightarea">
                    <div class="loginarea">


                        <a href="https://www.learnandearnint.com/user/signup">Register</a> <span>|</span> <a href="https://www.learnandearnint.com/user/login">Log In</a>

                    </div><!--loginarea-->

                </div>


                <ul class="menu">
                    <li><a href="{{url('/')}}">@lang('Home')</a></li>
                    <li><a href="{{route('about')}}">@lang('Who we are')</a></li>
                    <li><a href="{{route('payouts')}}">@lang('Recent Payouts')</a></li>
                    <li><a href="{{route('referral')}}">@lang('Referral Contests')</a></li>
                    <li><a href="https://learnandearnit.com/faq">@lang('FAQ')</a></li>

                   <!--
                    @foreach($pages as $k => $data)
                        <li><a href="{{route('pages',[$data->slug])}}">{{trans($data->name)}}</a></li>
                    @endforeach -->
                    <!-- <li><a href="{{route('blog')}}">@lang('Blog')</a></li>
                    <li><a href="{{route('contact')}}">@lang('Contact')</a></li> -->
                    @auth
                        <li><a href="javascript:void(0)">{{auth()->user()->username}}</a>
                            <ul class="submenu">
                                <li><a href="{{route('user.home')}}">@lang('Dashboard')</a></li>
                                <li><a href="{{route('user.logout')}}">@lang('Logout')</a></li>
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="javascript:void(0)">@lang('Account')</a>
                            <ul class="submenu">
                                <li><a href="{{route('user.login')}}">@lang('Login')</a>
                                </li>
                                <li><a href="{{route('user.register')}}">@lang('Register')</a></li>
                            </ul>
                        </li>
                    @endauth
                </ul>

                <select class="select-bar d-sm-none ml-auto mr-3 langSel">
                    @foreach($language as $item)
                        <option value="{{$item->code}}"
                                @if(session('lang') == $item->code) selected @endif>{{ __($item->name) }}</option>
                    @endforeach
                </select>

                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ============Header Section Ends Here============ -->
@yield('content')
<!-- ============Footer Section Starts Here============ -->

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="logo">
                <a href="{{url('/')}}" style="text-align:center;"><img src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}" alt="logo" style="max-width:50%;"></a>
            </div>
            <p>{{__(@$footer->data_values->website_footer)}}</p>
            <ul class="social-icons">
                @foreach($socials as $social)
                    <li><a href="{{@$social->data_values->url}}" target="_blank"
                           title="{{@$social->data_values->title}}">@php echo @$social->data_values->social_icon; @endphp</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>{{__(@$footer->data_values->copyright)}}</p>
    </div>
</footer>
<!-- ============Footer Section Ends Here============ -->
<script src="{{asset($activeTemplateTrue . 'frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue . 'frontend/js/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue . 'frontend/js/plugins.js')}}"></script>
<script src="{{asset($activeTemplateTrue . 'frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue . 'frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue . 'frontend/js/magnific-popup.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue . 'frontend/js/swiper.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue . 'frontend/js/wow.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue . 'frontend/js/odometer.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue . 'frontend/js/viewport.jquery.js')}}"></script>
<script src="{{asset($activeTemplateTrue . 'frontend/js/nice-select.js')}}"></script>
@stack('script-lib')

<script src="{{asset($activeTemplateTrue . 'frontend/js/main.js')}}"></script>

@stack('js')
@include('partials.notify')
@include('partials.plugins')

<script>
    $(document).on("change", ".langSel", function () {
        window.location.href = "{{url('/')}}/change/" + $(this).val();
    });
</script>
@stack('script')

</body>
</html>
