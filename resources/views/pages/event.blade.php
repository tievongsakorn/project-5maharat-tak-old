@extends('weblayouts.default') 
@section('event-active','active')
@section('content')
<div class="container" style="padding-top: 5vh;padding-bottom: 10vh;">
    <h1>ปฏิทินกิจกรรม</h1>      
    <p>ข้อมูลจากการท่องเที่ยวแห่งประเทศไทย</p>
        <div class="row event_row" style="position: relative ;padding-top: 5vh;">
        @foreach ($data as $item)
            <a href="{{ url('event/'.$item['event_id']) }}" style="text-decoration: none" class="col-12 col-md-6 col-xl-4">
                <div class="event_card">
                        <h2>{{ $item['event_name'] }}</h2>
                    <div class="event_detail">
                        <p>
                            {{ $item['event_introduction'] }} 
                        </p>
                        <p>
                            {{ $item['display_event_period_date'] }} 
                        </p>
                        <p>
                            {{ $item['location'] }}
                        </p>
                    </div>
                    <div class="event_img-frame">
                        <img src="{{ $item['thumbnail_url'] }}" width="100%" alt="">
                    </div>
                </div>
            </a>
        @endforeach
            
        </div>
        @if ($lastpagechk == '1') 
        <div class="col-12 mt-5">
            <center>
                <a href="{{ url('eventpagepre/'.$page.'') }}" class="btn btn-primary">หน้าก่อนหน้า</a>
            </center>
        </div>
        @elseif ($lastpagechk == '2') 
            <div class="col-12 mt-5">
                <center>
                    <a href="{{ url('eventpagenex/'.$page.'') }}" class="btn btn-primary">หน้าต่อไป</a>
                </center>
            </div>
        @else
        <div class="col-12 mt-5">
            <center>
                <a href="{{ url('eventpagepre/'.$page.'') }}" class="btn btn-primary"><< หน้าก่อนหน้า</a>
                <a href="{{ url('eventpagenex/'.$page.'') }}" class="btn btn-primary">หน้าต่อไป >></a>

            </center>
            
        </div>
        @endif
        
</div>
@endsection