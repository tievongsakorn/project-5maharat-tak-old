@extends('weblayouts.default')
@section('member-active','active')
@section('content')
<div class="container" style="margin-top: 5vh; padding-top : 5vh;padding-bottom : 5vh">
    @if (isset(Auth::user()->username))
        <h1>ยินดีต้อนรับ {{ Auth::user()->username }} &nbsp;
           
            <a href="{{ url('/member/logout') }}" class="btn btn-danger">ออกจากระบบ</a>
            <a class="btn btn-primary" href="{{ url('/member/editprofile/') }}/{{ Auth::user()->username }}">ข้อมูลสมาชิก</a>
        </h1>
        <div class="row justify-content-center" style="padding-top:1em">
            <div class="col-12">
                <h3>
                    สถานที่แนะนำจากสมาชิก
                </h3>
                @if (isset($places[0]))
                <div class="member-carousel" data-flickity='{ "percentPosition": false,"pageDots": false, "fade": true}'>
                    @foreach ($places as $data)
                        <button  class="carousel-cell">
                            <div class="member_places-text">
                                <h1>
                                    {{ $data->place_name }}
                                </h1>
                                <h5>
                                    {{ $data->place_type }}
                                </h5>
                                <p>
                                    {{ $data->username }}
                                </p>
                                <a onclick="location.href='{{ url('member_toppic/'.$data->id.'') }}'" class="btn btn-success">รายละเอียด</a>
                            </div>
                            <img src="{{ asset($data->img_path) }}" width="100%">
                            
                        </button>
                @endforeach
                </div>
                @else
                    <div class="alert alert-info" role="alert">
                        <h4>ยังไม่มีสถานที่แนะนำจากสมาชิก</h4>
                    </div>
                @endif 
            </div>
            <div class="col-6" style="margin-top: 2em">
                <a href="{{ url('member_toppic/create') }}" class="btn btn-primary btn-block"> แนะนำสถานที่ </a>
                <a href="{{ url('myplace/'.Auth::user()->username.'') }}" class="btn btn-warning btn-block"> สถานที่แนะนำของคุณ </a>
            </div>
        </div>
        

    @else    
        <script>window.location = "member"; </script>
    @endif

</div>

@endsection