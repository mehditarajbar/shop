@extends('layout.main')
@section('title')
    Music
@endsection

@section('content')
    <div class="ms_content_wrapper padder_top80">
      @include('layout.topmenu')
        <div class="ms-banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="ms_banner_img">
                            <img src="{{asset('images/banner.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="ms_banner_text">
                            <h1>این ماه</h1>
                            <h1 class="ms_color">آلبوم های رکورد شکن !</h1>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                            <div class="ms_banner_btn">
                                <a href="#" class="ms_btn">پخش </a>
                                <a href="#" class="ms_btn">اضافه کردن به لیست</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('sections.last-play')
        @include('sections.15-artist')
        @include('sections.top-artist')
        @include('sections.addbox-center')
{{--        @include('sections.new-relealses')--}}
{{--        @include('sections.feature-album')--}}
{{--        @include('sections.top-genres')--}}
{{--        @include('sections.addbox-center')--}}
{{--        @include('sections.radio')--}}
    </div>
@endsection
