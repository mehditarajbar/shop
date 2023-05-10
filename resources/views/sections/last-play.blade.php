<div class="ms_rcnt_slider">
    <div class="ms_heading">
        <h1>آخرین پخش شده ها</h1>
        <span class="veiw_all"><a href="#">مشاهده بیشتر</a></span>
    </div>

    <div class="swiper-container">
        <x-last-play-swiper-slide :artists="$artists"/>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next slider_nav_next"></div>
    <div class="swiper-button-prev slider_nav_prev"></div>
</div>
