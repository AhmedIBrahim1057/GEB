@extends('../../layouts.app')

@section('content')

<style>
    .studyCaseWrapper{
        padding: 20px; 
        width: 280px;
        /* height: 320px; */
        height: 370px;
        max-height:450px;
        overflow: hidden;
        cursor: pointer;
        border: 1px solid #ccc;
        border-radius: 10px;
        margin-bottom: 30px;
        margin-left: auto;
        margin-right: auto;
        transition: all .3s ease-in-out;
    }
    .studyCaseWrapper:hover{
        box-shadow: 0px 0px 10px #ccc;
    }
</style>

<div role="main" class="main full-height initial-height" id="main">    
    <section class="section section-title section-text-light section-background section-center" style="background-image: url({{asset('images/custom-header-bg.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-normal custom-font-size-2 m-none pb-sm">Dissemination</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Meeting Start -->
    <section>
        <div class="container">
            <div class="row" style="padding: 0px 30px ;">
                {{-- @foreach ($dissemination as $row) --}}
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="studyCaseWrapper" onclick="location.href='#'">
                        <img src="{{ asset('/images/place-holder.jpg') }}" alt="" width="243" height="140">
                        <div class="info">
                            <h3 style="margin-top: 20px">title</h3>
                            <p style="margin-top: -10px">host institution</p>
                            <p style="margin-top: -10px">date</p>
                            {{-- @php
                                $rangeDate = $row->date;
                                $date = explode(" - ", $rangeDate);//for checking if startdate = enddate
                            @endphp 
                            <p style="margin-top: -10px">{!! ($date[0] == @$date[1] ? $date[0] : $rangeDate) !!}</p> --}}
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="studyCaseWrapper" onclick="location.href='#'">
                        <img src="{{ asset('/images/place-holder.jpg') }}" alt="" width="243" height="140">
                        <div class="info">
                            <h3 style="margin-top: 20px">title</h3>
                            <p style="margin-top: -10px">host institution</p>
                            <p style="margin-top: -10px">date</p>
                            {{-- @php
                                $rangeDate = $row->date;
                                $date = explode(" - ", $rangeDate);//for checking if startdate = enddate
                            @endphp 
                            <p style="margin-top: -10px">{!! ($date[0] == @$date[1] ? $date[0] : $rangeDate) !!}</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="studyCaseWrapper" onclick="location.href='#'">
                        <img src="{{ asset('/images/place-holder.jpg') }}" alt="" width="243" height="140">
                        <div class="info">
                            <h3 style="margin-top: 20px">title</h3>
                            <p style="margin-top: -10px">host institution</p>
                            <p style="margin-top: -10px">date</p>
                            {{-- @php
                                $rangeDate = $row->date;
                                $date = explode(" - ", $rangeDate);//for checking if startdate = enddate
                            @endphp 
                            <p style="margin-top: -10px">{!! ($date[0] == @$date[1] ? $date[0] : $rangeDate) !!}</p> --}}
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <br>
            <div class="row pb-xlg">
                <div class="col-md-12 center">
                    {{-- pagination  --}}
                    {{-- {{ $dissemination->links() }} --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Meeting End -->
</div>

@endsection