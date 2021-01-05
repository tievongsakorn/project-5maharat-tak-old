@extends('weblayouts.default')
@section('content')
<div class="container" style="padding-bottom: 10em">
    <div class="row justify-content-center" style="padding-top: 5vh">
        <div class="col-12 mb-3">
            <center>
                <h1>
                    {{ $data->place_type }} : {{ $data->place_name }}
                </h1>
            </center>
        </div>
    </div>

        <div class="col-12">
            @if ($data->img_path === 'no_photo')
            <div class="alert alert-info" role="alert">
                <center>
                    <h6>
                        ไม่มีภาพสถานที่
                    </h6>
                </center>
              </div>
            @else
            
             <img src="{{ asset($data->img_path) }}" width="100%">

            @endif
            
            

        </div>
        <div class="col-12 mt-5">
            <h4>
                รายละเอียด : 
            </h4>
                {!! $data->place_detail !!} <br><br><br>
        </div>
                
               
        <div class="col-12">
            {!!$data->map_url!!} <br>
            <p>
             สร้างโดย : {{ $data->username }}
             <u>วันที่สร้าง :</u>  {{ $data->created_at }} <br>
             <u>วันทีปรับปรุงข้อมูลล่าสุด :</u> {{ $data->updated_at }}
            </p>
    </div>
</div>
@endsection