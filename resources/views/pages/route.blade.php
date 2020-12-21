@extends('weblayouts.default')
@section('route-active','active')
@section('content')
<div class="container" style="margin-bottom: 2em">
    <center>
        <h1 style="margin-top : 5vh">
             เส้นทางการท่องเที่ยว 4 มหาราช
        </h1>
       
    </center>
    <div class="row">
        <div class="col-12 route_box" id="route_box-1">
            <a href="#">
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('img/1.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="col-9 route_name-box ">
                        <h3>เส้นทางพ่อขุนรามคำแหงมหาราช</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 route_box" id="route_box-2">
            <a href="#">
                <div class="row">
                    <div class="col-3">
                            <img src="{{ asset('img/2.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="col-9 route_name-box" >
                        <h3>เส้นทางสมเด็จพระนเรศวรมหาราช</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 route_box " id="route_box-3">
            <a href="#">
                <div class="row">
                    <div class="col-3">
                            <img src="{{ asset('img/3.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="col-9 route_name-box" >
                        <h3>เส้นทางพระนารายณ์มหาราช</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 route_box" id="route_box-4">
            <a href="#">
                <div class="row">
                    <div class="col-3">
                            <img src="{{ asset('img/1.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="col-9 route_name-box" >
                        <h3>เส้นทางสมเด็จพระเจ้าตากสินมหาราช</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 route_box" id="route_box-5">
            <a href="#">
                <div class="row">
                    <div class="col-3">
                            <img src="{{ asset('img/2.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="col-9 route_name-box" >
                        <h3>เส้นทางสมเด็จพระมหาภูมิพลอดุลยเดชมหาราช</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection