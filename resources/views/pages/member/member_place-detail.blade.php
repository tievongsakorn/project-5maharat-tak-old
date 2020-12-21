@extends('weblayouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding-top: 5vh">
        <div class="col-12 col-md-11">
            <center>
                <h1>
                    {{ $data->place_type }} : {{ $data->place_name }}
                </h1>
            </center>

        </div>
        <div class="col-12 col-md-11">
            <h4>
                รายละเอียด : 
            </h4>
                {!! $data->place_detail !!} <br><br><br>
        </div>
        <div class="col-12 col-md-11">
                    {!!$data->map_url!!}
        </div>
        <div class="col-12 col-md-11">
            <h6>
                สร้างโดย : {{ $data->username }}
            </h6>
            <p>
               <u>วันที่สร้าง :</u>  {{ $data->created_at }} <br>
                <u>วันทีปรับปรุงข้อมูลล่าสุด :</u> {{ $data->updated_at }}
            </p>
        </div>
    </div>
</div>
@endsection