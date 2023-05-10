
<div class="swiper-wrapper">
@foreach($artists as $artist)
        <div class="swiper-slide">
            <div class="ms_rcnt_box">
                <div class="ms_rcnt_box_img">
                    <img src="{{asset('images/artist/'.$artist['cover'])}}" alt="">
                    <div class="ms_main_overlay">
                        <div class="ms_box_overlay"></div>
                        <div class="ms_more_icon">
                            <img src="images/svg/more.svg" alt="">
                        </div>
                        <x-tools-box/>
                        <div class="ms_play_icon">
                            <img src="images/svg/play.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="ms_rcnt_box_text">
                    <h3><a href="#">{{$artist['name']}}</a></h3>
                </div>
            </div>
        </div>
@endforeach
</div>
