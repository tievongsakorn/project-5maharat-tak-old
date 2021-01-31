@extends('weblayouts.default')
@section('home-active','active')
@section('content')

<div class="homepage-container" align="center">
    <div class="overlay_banner slide-right">
        <h1> เว็บแอปพลิเคชันแนะนำเส้นทางการท่องเที่ยว 5 มหาราชจังหวัดตาก</h1>
    </div>
        <div class="home-carousel" data-flickity='{ "percentPosition": false ,"wrapAround": true ,"prevNextButtons": false, "autoPlay": 3500 ,"pageDots": false, "fade": true ,"fullscreen": true}'>
            <img class="carousel-cell" src="{{ asset('img/banner_1.png') }}" alt="" />
            <img class="carousel-cell" src="{{ asset('img/banner_2.png') }}" alt="" />
            <img class="carousel-cell" src="{{ asset('img/banner_3.png') }}" alt="" />
        </div>
</div>
   
<div class="container">
    <div class="slide-right">
        {{-- <h1> เว็บแอปพลิเคชันแนะนำเส้นทางการท่องเที่ยว 5 มหาราชจังหวัดตาก</h1> --}}
    </div>
    <div class="row align-items-center">
        <div class="col-5">
            <img src="{{ asset('img/TAK2.png') }}" width="100%" alt="">
        </div>
        <div class="col-7 ">
            <img src="{{ asset('img/kamkwan.png') }}" width="100%" alt="">
        </div>
    </div>
    
    <center>
        <h1 style="padding-bottom:2vh">
             เส้นทางเชื่อมโยงการท่องเที่ยว 5 มหาราช
        </h1>
    </center>
    
    <div class="row" style="padding-bottom:5vh">
        <div class="col-11 route_box" id="route_box-1">
            <a href="{{ url('route/1') }}">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="img_box">
                        <img src="{{ asset('img/route/home_route.jpg') }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-12 col-md-9 route_name-box ">
                        <h3>เส้นทางพ่อขุนรามคำแหงมหาราช</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-11 route_box" id="route_box-2">
            <a href="{{ url('route/2') }}">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="img_box">
                            <img src="{{ asset('img/route/pro_route2.jpg') }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-12 col-md-9 route_name-box" >
                        <h3>เส้นทางสมเด็จพระนเรศวรมหาราช</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-11 route_box " id="route_box-3">
            <a href="{{ url('route/3') }}">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="img_box">
                            <img src="{{ asset('img/route/pro_route3.jpg') }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-12 col-md-9 route_name-box" >
                        <h3>เส้นทางพระนารายณ์มหาราช</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-11 route_box" id="route_box-4">
            <a href="{{ url('route/4') }}">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="img_box">
                            <img src="{{ asset('img/route/pro_route4.jpg') }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-12 col-md-9 route_name-box" >
                        <h3>เส้นทางสมเด็จพระเจ้าตากสินมหาราช</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-11 route_box" id="route_box-5">
            <a href="{{ url('route/5') }}">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="img_box">
                            <img src="{{ asset('img/route/pro_route5.jpg') }}" alt="" height="100%" srcset="">
                        </div>
                    </div>
                    <div class="col-12 col-md-9 route_name-box" >
                        <h3>เส้นทางสมเด็จพระมหาภูมิพลอดุลยเดชมหาราช</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-12">
        <center>
            <h1>แผนที่แสดงเส้นทางทั้งหมด</h1>
        </center>
        <iframe src="https://www.google.co.th/maps/d/embed?mid=1WZt3UfS16XNujzzvprh6IpDEd6AMusup" width="100%"></iframe>
    </div>
</div>
@endsection