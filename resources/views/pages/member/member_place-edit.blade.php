@extends('weblayouts.default')
@section('content')
    <div class="container" style="margin-top: 0vh;padding-bottom: 5vh">
        @if (isset(Auth::user()->username))
        <form  action="{{ url('member_toppic/'.$data->id.'') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div style="margin-top: 8vh;padding-bottom: 2vh" class="h2">แก้ใขสถานที่ของคุณ</div>
                    <div class="form-group">
                        <label style="margin-top: 3vh" for="place_name">ชื่อสถานที่</label>
                        <input type="text" class=" form_addplace" name="place_name" id="place_name" value="{{ $data->place_name }}" required>
                    </div>
                    <div class="form-group">
                        <label style="margin-top: 2vh" for="place_des">รายละเอียดของสถานที่</label>
                        <textarea type="text" name="place_detail" id="place_detail" required>{{ $data->place_detail }} </textarea>
                    </div>
                    <div class="form-group">
                        <label style="margin-top: 2vh" for="place_type">ประเภทของสถานที่</label>
                        <input type="text" class=" form_addplace" name="place_type" id="place_type" value="{{ $data->place_type }}" required>
                    </div>
                    <div class="form-group">
                        <label style="margin-top: 2vh" for="map_url">ลิงก์แผนที่จาก Google Map</label>
                        <textarea type="textarea" class=" form_addplace" name="map_url" id="map_url" required>{{ $data->map_url }}</textarea>
                    </div>
                    <input type="hidden" value="{{ Auth::user()->username }}" name="username" id="username">     
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" name="place-img" id="place-img" aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="place-img">เลือกรูปภาพของสถานที่</label>
                        </div>
                    </div>
                    <br>
                    <h6>สร้างโดย {{ Auth::user()->username }} </h6>
                    <center>
                        <label class="blink_me" style="margin-top: 1em;padding-bottom: 1em" for="confirm">ข้าพเจ้ายืนยันว่าข้อมูลข้างต้นเป็นจริงทั้งหมด</label>
                        <input type="checkbox" name="confirm" id="confirm" required>
                    </center>
                    
                    <button class="btn btn-primary btn-block" type="submit">บันทึกการแก้ใข</button>
                    <button class="btn btn-danger btn-block" type="reset">ล้างข้อมูลในฟอร์ม
                    </button>
                    
                </div>
            </div>
        </form>
        
        <script> 
            CKEDITOR.replace( 'place_detail' );
            </script>

    @else    
        <script>window.location = "member"; </script>
    @endif
    </div>

@endsection