@extends('weblayouts.default') 
@section('event-active','active')
@section('content')
<div class="container" style="padding-top: 5vh;padding-bottom: 10vh;">
    <h1>ปฏิทินกิจกรรม</h1>      
    
    <p>ได้รับการอนุเคราะห์ข้อมูลจากการท่องเที่ยวแห่งประเทศไทย</p>
        <div class="row event_row" style="position: relative ;padding-top: 5vh;">
        @foreach ($data as $item)
            <a href="{{ url('event/'.$item['event_id']) }}" style="text-decoration: none" class="col-12 col-md-6 col-xl-4">
                <div class="event_card">
                        <h2>{{ $item['event_name'] }}</h2>
                    <div class="event_detail">
                        <p class="event_predetail">
                            {{ $item['event_introduction'] }} 
                        </p>
                        <p>
                            {{ $item['display_event_period_date'] }} 
                        </p>
                        <p>
                            {{ $item['location'] }}
                        </p>
                    </div>
                    {{-- {{ dd($item['thumbnail_url'])  }} --}}
                    
                    <div class="event_img-frame">
                        @if ($item['thumbnail_url'] !== "")
                            <img src="{{ $item['thumbnail_url'] }}" width="100%" alt="">
                        @else
                            <img src="{{ asset('img/no-event-img.png') }}" width="100%" alt="">
                        @endif
                    </div>
                </div>
            </a>
        @endforeach
            
        </div>
        @if ($pre_page === 0) 
        <div class="col-12 mt-5">
            <center>
                <a href="{{ url('eventpage/'.$page.'') }}" class="btn btn-primary">หน้าต่อไป</a>
            </center>
        </div>
        {{-- @elseif ($page_last === 99999) 
        <div class="col-12 mt-5">
            <center>
                <a href="{{ url('eventpage/'.$pre_page.'') }}" class="btn btn-primary"><< หน้าก่อนหน้า</a>
            </center>
        </div> --}}
        @else
        <div class="col-12 mt-5">
            <center>
                <a href="{{ url('eventpage/'.$pre_page.'') }}" class="btn btn-primary"><< หน้าก่อนหน้า</a>
                <a href="{{ url('eventpage/'.$page.'') }}" class="btn btn-primary">หน้าต่อไป >></a>
            </center>
        </div>
        @endif
</div>
@endsection