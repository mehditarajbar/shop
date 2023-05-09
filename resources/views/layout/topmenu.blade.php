<div class="ms_header">
    <div class="ms_top_left">
        <div class="ms_top_search">
            <input type="text" class="form-control" placeholder="Search Music Here..">
            <span class="search_icon">
							<img src="images/svg/search.svg" alt="">
						</span>
        </div>
        <div class="ms_top_trend">
            <span><a href="#"  class="ms_color">Trending Songs :</a></span> <span class="top_marquee"><a href="#">Dream your moments, Until I Met You, Gimme Some Courage, Dark Alley (+8 More)</a></span>
        </div>
    </div>
    <div class="ms_top_right">
        <div class="ms_top_lang">
            <span data-toggle="modal" data-target="#lang_modal">languages <img src="images/svg/lang.svg" alt=""></span>
        </div>
        <div class="ms_top_btn">
           @if(Auth::check())
               <x-dropdown alt="right" width="48">
                   <x-slot name="trigger">
                       <input type="button" class="ms_btn reg_btn" value="{{Auth::user()->name}}">

                   </x-slot>
                   <x-slot name="content">
                       <x-dropdown-link :href="route('profile.edit')">
                           {{__('Profile')}}
                       </x-dropdown-link>
                       <form method="POST" action="{{ route('logout') }}">
                           @csrf
                           <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                               {{ __('Log Out') }}
                           </x-dropdown-link>
                       </form>
                   </x-slot>
               </x-dropdown>
            @else
            <a href="javascript:;" class="ms_btn reg_btn" data-toggle="modal" data-target="#myModal"><span>register</span></a>
            <a href="javascript:;" class="ms_btn login_btn" data-toggle="modal" data-target="#myModal1"><span>login</span></a>
            @endif
        </div>
    </div>
</div>
