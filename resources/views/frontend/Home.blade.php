@extends('../layouts.app')

@section('content')
<style>
    .item {
        height: 380px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        margin: 10px;
        overflow: hidden;
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;
    }

    .item a {
        text-decoration: none;
    }

    .item a p {
        margin-top: -10px;
    }

    .item a h3 {
        margin-top: 30px;
    }

    .item a .img {
        width: 250px;
        height: 188px;
    }

    .item a .img img {
        height: auto;
        width: 100%;
        object-fit: contain;
        overflow: hidden;
    }

</style>
<div role="main" class="main" id="main">
    <div class="slider-container rev_slider_wrapper" style="height: 500px;">
        <div id="revolutionSlider" class="slider rev_slider manual">
            <ul>
                {{-- @foreach($slider_images as $image) --}}
                <li data-transition="fade">
                    <img src="{{ asset('/images/place-holder.jpg') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="7000"
                        data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100"
                        data-offsetend="-250 -150" class="rev-slidebg">
                    <div class="tp-caption tp-caption-photo-label" data-x="['left','left','left','left']"
                        data-hoffset="['28','28','28','28']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','28','28']" data-start="500" data-basealign="slide"
                        data-transform_in="y:[-300%];opacity:0;s:500;"></div>
                </li>
                {{-- @endforeach --}}
                <li data-transition="fade">
                    <img src="{{ asset('/images/place-holder.jpg') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="7000"
                        data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100"
                        data-offsetend="-250 -150" class="rev-slidebg">
                    <div class="tp-caption tp-caption-photo-label" data-x="['left','left','left','left']"
                        data-hoffset="['28','28','28','28']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','28','28']" data-start="500" data-basealign="slide"
                        data-transform_in="y:[-300%];opacity:0;s:500;"></div>
                </li>
                <li data-transition="fade">
                    <img src="{{ asset('/images/place-holder.jpg') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="7000"
                        data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100"
                        data-offsetend="-250 -150" class="rev-slidebg">
                    <div class="tp-caption tp-caption-photo-label" data-x="['left','left','left','left']"
                        data-hoffset="['28','28','28','28']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','28','28']" data-start="500" data-basealign="slide"
                        data-transform_in="y:[-300%];opacity:0;s:500;"></div>
                </li>
                <li data-transition="fade">
                    <img src="{{ asset('/images/place-holder.jpg') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="7000"
                        data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100"
                        data-offsetend="-250 -150" class="rev-slidebg">
                    <div class="tp-caption tp-caption-photo-label" data-x="['left','left','left','left']"
                        data-hoffset="['28','28','28','28']" data-y="['bottom','bottom','bottom','bottom']"
                        data-voffset="['28','28','28','28']" data-start="500" data-basealign="slide"
                        data-transform_in="y:[-300%];opacity:0;s:500;"></div>
                </li>
            </ul>
        </div>
    </div>
    <a href="#intro">
        <div class="cursor"><i class="fa fa-angle-down"></i></div>
    </a>
</div>

<!--Start Content-->
<section id="intro">
    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align: center; padding: 20px;" data-aos="fade-up" data-aos-duration="2000">
                <h1>Project Title</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in risus augue. Nam quis mauris quis erat euismod vulputate eu ut tellus. Nulla facilisi. Pellentesque vehicula tincidunt justo at ullamcorper. Fusce imperdiet mi ac porttitor faucibus. Morbi sit amet auctor ligula, vitae pharetra mi. Vestibulum finibus ipsum in dolor pretium cursus. Suspendisse laoreet enim leo, ac laoreet metus porta nec. Maecenas eu consequat ex. In a laoreet justo. Aliquam efficitur justo ut arcu tempor, sed interdum magna mattis. Curabitur in odio et nulla fermentum aliquet. Duis risus tortor, laoreet in neque at, sodales pharetra mi.</p>
            </div>
        </div>
    </div>
</section>
<section class="objectives" style="background: url('../../images/place-holder.jpg') no-repeat center;">
    <div class="container" class="OContainer" style="background-color: #fff; padding: 20px; border-radius: 5px;"
        data-aos="zoom-in" data-aos-duration="1500">
        <div class="row" style="padding: 10px;">
            <div class="col-12">
                <h1 style="text-align: center;">Project Objectives</h1>
                <div class="row" style="font-size: 16px;">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <ul>
                            <li>Nunc venenatis dolor eu nulla scelerisque, id hendrerit nulla interdum. Ut tempus risus eu urna suscipit blandit. Quisque pharetra erat nisi, non tincidunt purus maximus eu.</li>
                            <li>Vestibulum sit amet ante ante. Sed tortor erat, aliquet et eleifend et, imperdiet et arcu. Praesent consectetur diam eros, a lobortis justo congue tincidunt. Ut euismod in augue et bibendum.</li>
                            <li>Aliquam eleifend rhoncus neque, aliquam auctor arcu. Duis eleifend pharetra neque ac sollicitudin. Vestibulum dignissim vulputate est.</li>
                            <li>Aliquam id diam auctor, fermentum sapien et, dapibus sem. Nulla cursus enim quis dui tincidunt, vitae fringilla velit consequat.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <ul>
                            <li>Nunc venenatis dolor eu nulla scelerisque, id hendrerit nulla interdum. Ut tempus risus eu urna suscipit blandit. Quisque pharetra erat nisi, non tincidunt purus maximus eu.</li>
                            <li>Vestibulum sit amet ante ante. Sed tortor erat, aliquet et eleifend et, imperdiet et arcu. Praesent consectetur diam eros, a lobortis justo congue tincidunt. Ut euismod in augue et bibendum.</li>
                            <li>Aliquam eleifend rhoncus neque, aliquam auctor arcu. Duis eleifend pharetra neque ac sollicitudin. Vestibulum dignissim vulputate est.</li>
                            <li>Aliquam id diam auctor, fermentum sapien et, dapibus sem. Nulla cursus enim quis dui tincidunt, vitae fringilla velit consequat.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sponsors">
    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align: center;">
                <h1>Co-funded by</h1>
            </div>
            <div class="col-12">
                <div class="cardWrapper" style="margin-top: 50px; margin-bottom: 80px;">
                    <div class="wrapper">
                        <div class="card">
                            <div class="imgWrapper">
                                <img class="img-responsive" src="/images/erasmus.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="backimg"
    style="background: url('/images/place-holder.jpg') center no-repeat; background-size: cover; background-attachment: fixed; padding: 0px; height: 350px;">
    <div class="hover" style="background-color: #0a071f6c; height: 100%;"></div>
</section>
<section class="events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="font-family: Open Sans, Arial, sans-serif;  font-weight: 400; text-align: center;">Events
                </h1>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <div class="item shadow ">
                        <a href="#">
                            <div class="img">
                                <img src="{{ asset('/images/place-holder.jpg') }}" alt="">
                            </div>
                            <h3>event title</h3>
                            <p style="margin-top: -10px">event host institution</p>
                            <p>event date</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding-top: 0px;">

    <div class="container" style="text-align: center;">
        <div class="row">
            <div class="col-12" style="padding-bottom: 20px;">
                <h1
                    style="font-family: Open Sans, Arial, sans-serif;  font-weight: 400; margin-bottom: 30px; text-align: center;">
                    Partners</h1>
            </div>
            <div class="col-12" style="text-align: center;">

                <div class="row">

                    <div style="padding: 10px 10px 10px 10px;" class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img
                            onclick="window.open('http://www.asu.edu.eg/')" src="/frontendFiles/img/partners/2.png"
                            class="img-responsive" alt=""
                            style="width: 100px; height: auto; margin: auto; cursor: pointer;">
                    </div>

                    <div style="padding: 10px 10px 10px 10px;" class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img
                        onclick="window.open('http://www.asu.edu.eg/')" src="/frontendFiles/img/partners/2.png"
                        class="img-responsive" alt=""
                        style="width: 100px; height: auto; margin: auto; cursor: pointer;">
                    </div>

                    <div style="padding: 10px 10px 10px 10px;" class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img
                        onclick="window.open('http://www.asu.edu.eg/')" src="/frontendFiles/img/partners/2.png"
                        class="img-responsive" alt=""
                        style="width: 100px; height: auto; margin: auto; cursor: pointer;">
                    </div>

                    <div style="padding: 10px 10px 10px 10px;" class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img
                        onclick="window.open('http://www.asu.edu.eg/')" src="/frontendFiles/img/partners/2.png"
                        class="img-responsive" alt=""
                        style="width: 100px; height: auto; margin: auto; cursor: pointer;">
                    </div>

                    <div style="padding: 10px 10px 10px 10px;" class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img
                        onclick="window.open('http://www.asu.edu.eg/')" src="/frontendFiles/img/partners/2.png"
                        class="img-responsive" alt=""
                        style="width: 100px; height: auto; margin: auto; cursor: pointer;">
                    </div>

                    <div style="padding: 10px 10px 10px 10px;" class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img
                        onclick="window.open('http://www.asu.edu.eg/')" src="/frontendFiles/img/partners/2.png"
                        class="img-responsive" alt=""
                        style="width: 100px; height: auto; margin: auto; cursor: pointer;">
                    </div>

                </div>

                <div class="row" style="text-align: center;">

                    <div style="padding: 10px 10px 10px 10px;" class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col-lg-offset-1 col-md-offset-1"><img
                            onclick="window.open('http://www.asu.edu.eg/')" src="/frontendFiles/img/partners/2.png"
                            class="img-responsive" alt=""
                            style="width: 100px; height: auto; margin: auto; cursor: pointer;">
                    </div>

                    <div style="padding: 10px 10px 10px 10px;" class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img
                        onclick="window.open('http://www.asu.edu.eg/')" src="/frontendFiles/img/partners/2.png"
                        class="img-responsive" alt=""
                        style="width: 100px; height: auto; margin: auto; cursor: pointer;">
                    </div>

                    <div style="padding: 10px 10px 10px 10px;" class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img
                        onclick="window.open('http://www.asu.edu.eg/')" src="/frontendFiles/img/partners/2.png"
                        class="img-responsive" alt=""
                        style="width: 100px; height: auto; margin: auto; cursor: pointer;">
                    </div>

                    <div style="padding: 10px 10px 10px 10px;" class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img
                        onclick="window.open('http://www.asu.edu.eg/')" src="/frontendFiles/img/partners/2.png"
                        class="img-responsive" alt=""
                        style="width: 100px; height: auto; margin: auto; cursor: pointer;">
                    </div>

                    <div style="padding: 10px 10px 10px 10px;" class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img
                        onclick="window.open('http://www.asu.edu.eg/')" src="/frontendFiles/img/partners/2.png"
                        class="img-responsive" alt=""
                        style="width: 100px; height: auto; margin: auto; cursor: pointer;">
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
