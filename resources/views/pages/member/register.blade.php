@extends('weblayouts.default')
{{-- @section('member-active','active') --}}
@section('content')
<div class="container" style="padding-top: 10vh; padding-bottom:5vh">
    <h2>สมัครสมาชิก</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" class="form-group" action="{{URL('/user')}}" >
        {{csrf_field()}}
        <div class="form-group">
            <label for="formGroupExampleInput2">ชื่อผู้ใช้</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="8-30 Charater" >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput3">รหัสผ่าน</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="****************" >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput4">ยืนยันรหัสผ่าน</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="****************" >
        </div>    
        <label for="formGroupExampleInput2">กรุณากรอกชื่อ</label>
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" name="name" id="name" placeholder="ชื่อ" >
            </div>
            <div class="col">
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="นามสกุล" >
            </div>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">จังหวัด</label>
            <input type="text" class="form-control" name="prov" id="prov" placeholder="จังหวัดของผู้ใช้งาน" >
        </div>

    
        <button type="submit" id="btn-submit" name="Submit" value="Submit"  class="btn btn-success">ยืนยัน</button>
        <input type="reset" class="btn btn-danger" value="รีเซ็ต">

    </form>
    <center>
        <br><br>
        <p>หากมีสมาชิกอยู่แล้ว </p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
            เข้าสู่ระบบ
        </button>
    </center>
</div>

@endsection