@extends('weblayouts.default')
@section('event-active','active')
@section('content')
    <div class="container" style="padding-top: 10vh;padding-bottom: 5vh;">
        <center>
            <h1>{{ $data['event_name'] }}</h1>
            <br><br>
        </center>
        <div class="row">
            <div class="col-12 col-md-6">
                <h5><u> วันที่จัด</u> : {{ $data['display_event_period_date'] }}</h5>
                <h5><u> สถานที่จัดงาน</u> : {{ $data['event_information']['event_introduction'] }}</h5>
                <h5><u> จังหวัด</u> : {{ $data['location'] }} <br></h5>
                <h5 class="text-justify">รายละเอียดงาน</h5>
                <u> รายละเอียดงาน </u> : {!! $data['event_information']['event_html_detail'] !!} <br>
                <br>
                <h4> <u> ช่องทางการติดต่อ </u></h4>
                <h5>
                    โทรศัพท์ : 
                    @if (isset($data['contact']['phones']))
                        @foreach ($data['contact']['phones'] as $phonenum)
                        <a href="tel:{{ $phonenum }}">{{ $phonenum }}</a>
                            <br>
                        @endforeach
                    @else
                        -
                    @endif
                    อีเมลล์ :
                    @if (isset($data['contact']['emails']))
                        @foreach ($data['contact']['emails'] as $email)
                        <a href="mailto:{{ $email }} ">{{ $email }} </a><br>
                        @endforeach 
                    @else
                    -
                    @endif
                    
                </h5>
                <br>
                <p style="color: gray">ปรับปรุงข้อมูลล่าสุด {{ $data['update_date'] }} </p>
            </div>
            <div class="col-12 col-md-6">
                @if (isset($data['web_picture_urls']))
                    @foreach ($data['web_picture_urls'] as $event_pic)
                    <div class="event_detail-pic">
                        <img src="{{ $event_pic }}" alt="" width="100%">
                    </div>
                    @endforeach
                @else
                <div class="alert alert-warning" role="alert">
                    <center>
                        <h5>
                            ไม่มีภาพกิจกรรม
                        </h5>
                    </center>
                    
                  </div>
                @endif
               
            </div>
        </div>
    </div>
@endsection