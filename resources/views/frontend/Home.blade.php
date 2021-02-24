@extends('../layouts.app')

@section('content')
<div role="main" class="main" id="main">
    <div class="slider-container rev_slider_wrapper" style="height: 500px;">
        <div id="revolutionSlider" class="slider rev_slider manual">
            <ul>
                <li data-transition="fade">
                    <img src="{{asset('/images/place-holder.jpg')}}"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        class="rev-slidebg">

                    <div class="tp-caption tp-caption-photo-label"
                        data-x="['left','left','left','left']"
                        data-hoffset="['28','28','28','28']" 
                        data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','28','28']" 
                        data-start="500"
                        data-basealign="slide" 
                        data-transform_in="y:[-300%];opacity:0;s:500;"></div>
                </li>
                <li data-transition="fade">
                    <img src="{{asset('/images/place-holder.jpg')}}"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        class="rev-slidebg">
                    
                    <div class="tp-caption tp-caption-photo-label"
                        data-x="['left','left','left','left']"
                        data-hoffset="['28','28','28','28']" 
                        data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','28','28']" 
                        data-start="500"
                        data-basealign="slide" 
                        data-transform_in="y:[-300%];opacity:0;s:500;"></div>
                </li>
                <li data-transition="fade">
                    <img src="{{asset('/images/place-holder.jpg')}}"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        class="rev-slidebg">
                    
                    <div class="tp-caption tp-caption-photo-label"
                        data-x="['left','left','left','left']"
                        data-hoffset="['28','28','28','28']" 
                        data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','28','28']" 
                        data-start="500"
                        data-basealign="slide" 
                        data-transform_in="y:[-300%];opacity:0;s:500;"></div>
                </li>
                <li data-transition="fade">
                    <img src="{{asset('/images/place-holder.jpg')}}"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        class="rev-slidebg">
                    
                    <div class="tp-caption tp-caption-photo-label"
                        data-x="['left','left','left','left']"
                        data-hoffset="['28','28','28','28']" 
                        data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','28','28']" 
                        data-start="500"
                        data-basealign="slide" 
                        data-transform_in="y:[-300%];opacity:0;s:500;"></div>
                </li>
                <li data-transition="fade">
                    <img src="{{asset('/images/place-holder.jpg')}}"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        class="rev-slidebg">
                    
                    <div class="tp-caption tp-caption-photo-label"
                        data-x="['left','left','left','left']"
                        data-hoffset="['28','28','28','28']" 
                        data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','28','28']" 
                        data-start="500"
                        data-basealign="slide" 
                        data-transform_in="y:[-300%];opacity:0;s:500;"></div>
                </li>
            </ul>
        </div>
    </div>

</div>

@endsection
