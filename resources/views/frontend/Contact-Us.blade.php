@extends('../../layouts.app')

@section('content')
<div role="main" class="main" id="main">
    <section class="section section-title section-text-light section-background section-center" style="background-image: url({{asset('images/custom-header-bg.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-normal custom-font-size-2 m-none pb-sm">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row center">
                <div class="col-md-12 ">
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna lobortis, at consectetur odio euismod. Maecenas eleifend semper vulputate. Integer pellentesque massa et felis aliquam.</p> --}}
                    
                    
                    @if(count($errors) >0)
                    <div class="box box-info">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }} </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    @endif
                    @if(Session::has('msg'))
                    <div class="box box-info">
                        <?php
                        $msg = array(); $msg = session()->pull('msg'); //pull : get the message the deleted it from the session
                        echo'
                            <div class="alert alert-'.$msg[0].' mt-lg">
                            <strong>'.$msg[0].'</strong> '.$msg[1].'
                            </div>';
                        ?>
                        @endif
                    <div class="alert alert-success hidden mt-lg">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="alert alert-danger hidden mt-lg" id="">
                        <strong>Error!</strong> There was an error sending your message.
                    </div>

                    <form class="form" id="" action="/contactus" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group align-left">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Your Name" value="{{ old('name') }}" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group align-left">
                                <div class="col-md-12">
                                    <input type="email" placeholder="Your E-mail" value="{{ old('email') }}" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group align-left">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Subject" value="{{ old('subject') }}" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group align-left">
                                <div class="col-md-12">
                                    <textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required>{{ old('message') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group ">
                                <div class="col-md-12">
                                    <div style="display: inline-block;" class="g-recaptcha" data-sitekey="6LfmKvAUAAAAAObWF0ZvNGMimEnnCiBFqT02uX0m"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-quaternary btn-borders btn-lg text-uppercase font-weight-semibold">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
