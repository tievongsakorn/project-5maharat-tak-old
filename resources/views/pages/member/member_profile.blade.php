@extends('weblayouts.default')
@section('member-active','active')
@section('content')
<br><br>
<div class="container" style="margin-top: 5vh; padding-top : 5vh;padding-bottom : 5vh">
    <h1> แสดงข้อมูลสมาชิก</h1>

    <table class="table table-striped tb_profile">
        <thead>    
            <tr>
                <th> ชื่อผู้ใช้ </th>
                <th>{{ $user_detail->username }} </th>
            </tr>
            <tr>
                <th> รหัสผ่าน </th>
                <th><a href="{{ url('user_passchange') }}">เปลี่ยนรหัสผ่าน</a> </th>
            </tr>
            
            <tr>
                <th> ชื่อ </th>
                <th>{{ $user_detail->name }}</th>
            </tr>
            <tr>
                <th> นามสกุล </th>
                <th>{{ $user_detail->lastname }}</th>
            </tr>
            <tr>
                <th> จังหวัด </th>
                <th>{{ $user_detail->prov }} </th>
            </tr>
        
            <tr>
                <th> วันที่สมัครสมาชิก </th>
                <th>{{ $user_detail->created_at}} </th>
            </tr>
            <tr>
                <th> แก้ใขข้อมูลครั้งล่าสุด </th>
                <th>{{ $user_detail->updated_at}} </th>
            </tr>
        </thead>
    </table>
    <a href="{{url('user/'.$user_detail->id.'/edit')}}">
        <button class="btn btn-warning">EDIT</button>
    </a>
    <a href="/user">
        <button class="btn btn-danger">ย้อนกลับ</button>
    </a>
    
    <br>

</div>

@endsection