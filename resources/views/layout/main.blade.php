<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/plugins/swiper/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/plugins/nice_select/nice-select.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/plugins/player/volume.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/plugins/scroll/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}">
    @yield('style')
</head>
<body>
<!----Loader Start---->
<div class="ms_loader">
    <div class="wrap">
        <img src="{{asset('images/loader.gif')}}" alt="">
    </div>
</div>
<!----Main Wrapper Start---->
<div class="ms_main_wrapper">
    <!---Side Menu Start--->
    @include('layout.sidebar')
    <!---Main Content Start--->
    @yield('content')
    <!----Footer Start---->
    @include('layout.footer')
    <!----Audio Player Section---->
{{--    @include('layout.player')--}}
</div>
<!----Register Modal Start---->
<!-- Modal -->
<div class="ms_register_popup">
    <div id="myModal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog register_dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="images/register_img.png" alt="" class="img-fluid"/>
                    </div>
                    <div class="ms_register_form">
                        <h2>ثبت نام</h2>
                        <form method="post" action="{{route('register')}}">
                            @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="نام و نام خانوادگی" class="form-control">

                            <span class="form_icon">
							<i class="fa_icon form-user" aria-hidden="true"></i>
							</span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" placeholder="ایمیل" class="form-control">
                            <span class="form_icon">
							<i class="fa_icon form-envelope" aria-hidden="true"></i>

						</span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="گذرواژه" class="form-control">
                            <span class="form_icon">
						<i class="fa_icon form-lock" aria-hidden="true"></i>

						</span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" placeholder="تایید گذرواژه" class="form-control">
                            <span class="form_icon">
						<i class=" fa_icon form-lock" aria-hidden="true"></i>
						</span>
                        </div>
                        <input type="submit" class="ms_btn custom_login_btn" value="ثبت نام">
                        <p>حساب کاربری دارید؟ <a href="#myModal1" data-toggle="modal"
                                                       class="ms_modal hideCurrentModel">ورود</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Login Popup Start---->
    <div id="myModal1" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog login_dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="images/register_img.png" alt="" class="img-fluid"/>
                    </div>
                    <div class="ms_register_form">
                        <h2>ورود</h2>
                        <form method="post" action="{{route('login')}}">
                            @csrf

                        <div class="form-group">
                            <input type="text" name="email" placeholder="ایمیل" class="form-control">
                            <span class="form_icon">
							<i class="fa_icon form-envelope" aria-hidden="true"></i>
						</span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="گذرواژه" class="form-control">
                            <span class="form_icon">
						<i class="fa_icon form-lock" aria-hidden="true"></i>
						</span>
                        </div>
                        <div class="remember_checkbox">
                            <label>به خاطر بسپار
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <input type="submit" class="ms_btn custom_login_btn " value="ورود">
                        <div class="popup_forgot">
                            <a href="#">فراموشی رمز</a>
                        </div>
                        <p>حساب کاربری ندارید؟ <a href="#myModal" data-toggle="modal"
                                                     class="ms_modal1 hideCurrentModel">ثبت نام</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----Queue Clear Model ---->
<div class="ms_clear_modal">
    <div id="clear_modal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Are you sure you want to clear your queue?</h1>
                    <div class="clr_modal_btn">
                        <a href="#">clear all</a>
                        <a href="#">cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----Queue Save Modal---->
<div class="ms_save_modal">
    <div id="save_modal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Log in to start sharing your music!</h1>
                    <div class="save_modal_btn">
                        <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i> continue with google
                        </a>
                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i> continue with facebook</a>
                    </div>
                    <div class="ms_save_email">
                        <h3>or use your email</h3>
                        <div class="save_input_group">
                            <input type="text" placeholder="Enter Your Name" class="form-control">
                        </div>
                        <div class="save_input_group">
                            <input type="password" placeholder="Enter Password" class="form-control">
                        </div>
                        <button class="save_btn">Log in</button>
                    </div>
                    <div class="ms_dnt_have">
                        <span>Dont't have an account ?</span>
                        <a href="javascript:;" class="hideCurrentModel" data-toggle="modal" data-target="#myModal">Register
                            Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Main js file Style-->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/swiper/js/swiper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/player/jplayer.playlist.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/player/jquery.jplayer.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/player/audio-player.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/player/volume.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/nice_select/jquery.nice-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/scroll/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
@yield('script')
</body>

</html>
