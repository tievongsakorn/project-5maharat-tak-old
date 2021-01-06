@extends('weblayouts.default')
@section('content')
    <div class="container" style="margin-top: 0vh;padding-bottom: 5vh">
        @if (isset(Auth::user()->username))
        <form class="was-validated"  action="{{ action('App\Http\Controllers\ToppicController@store') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row form-row justify-content-center">
                <div class="col-12 col-md-6">
                    <div style="margin-top: 8vh;padding-bottom: 2vh" class="h2">แนะนำสถานที่เพื่อนเติมสำหรับสมาชิก</div>
                    <div class="form-group">
                        <label style="margin-top: 3vh" for="place_name">ชื่อสถานที่</label>
                        <input type="text" class=" form_addplace" name="place_name" id="place_name" placeholder="กรุณากรอกชื่อของสถานที่" required>
                        
                    </div>
                    <div class="form-group">
                        <label style="margin-top: 2vh" for="place_des">รายละเอียดของสถานที่</label>
                        <textarea type="text" class="  " name="place_detail" id="place_detail" placeholder="กรุณากรอกรายละเอียดของสถานที่" required> </textarea>
                    </div>
                    <div class="form-group">
                        <label style="margin-top: 2vh" for="place_type">ประเภทของสถานที่</label>
                        <input type="text" class=" form_addplace" name="place_type" id="place_type" placeholder="กรุณากรอกประเภทของสถานที่" required>
                    </div>
                    <div class="form-group">
                        <label style="margin-top: 2vh" for="map_url">ลิงก์แผนที่จาก Google Map</label>
                        <textarea type="textarea" class=" form_addplace" name="map_url" id="map_url" placeholder="กรุณากรอกประเภทของสถานที่" required></textarea>
                    </div>
                    <input type="hidden" value="{{ Auth::user()->username }}" name="username" id="username">     
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" name="place-img" id="validatedCustomFile" aria-describedby="inputGroupFileAddon04"required>
                        <label class="custom-file-label" for="place-img">เลือกรูปภาพของสถานที่</label>
                        </div>
                    </div>
                    <br>
                    <h6>สร้างโดย {{ Auth::user()->username }} </h6>
                    <center>
                        <label class="blink_me" style="margin-top: 1em;padding-bottom: 1em" for="confirm">ข้าพเจ้ายืนยันว่าข้อมูลข้างต้นเป็นจริงทั้งหมด</label>
                        <input type="checkbox" name="confirm" id="confirm" required>
                    </center>
                    
                    <button class="btn btn-primary btn-block" type="submit">บันทึกสถานที่</button>
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