@extends('weblayouts.default')
@section('content')
<div class="container" style="height: 100vh">
    @if (isset(Auth::user()->username))
        <script>window.location = "member/successlogin"</script>

    @endif
    <div class="member_affter">
        <div class="col-12 col-md-6">
            <div class="alert alert-success" role="alert">
                <h3>สมัครสมาชิกสำเร็จ </h3>
                <p>กรุณาเข้าสูระบบเพื่อเข้าสู่กระทู้สมาชิก</p>

            </div>
            {{-- <div class="alert alert-info" role="alert">
            </div> --}}
        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" >เข้าสู่ระบบ</a>
    
        </div>
    </div>
    

    {{-- <form name="frmlogin"  method="post" action="{{ url('/member/checklogin') }}">
        @csrf
    <div class="login">
        
        <div class="row justify-content-md-center ">
            
            <div class="col-md-12" align="center">
                <img src="img/brand.png" alt="" height="170px" srcset="">
            </div>
            @if ($message = Session::get('error'))
                <div class="col-6">
                    <br>

                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                </div>
             @endif
            <div class="col-md-12" align="center">
                <input class="login_input" name="username" id="username" placeholder="ชื่อผู้ใช้" type="text">
            </div>
            <div class="col-md-12" align="center">
                <input class="login_input" name="password" id="password" placeholder="รหัสผ่าน" type="password">
            </div>    
            <div class="col-md-12" style="margin-top:1.5em" align="center">
                <input class="mem_btn btn btn-success" type="submit" value="submit">
             </div>   
             <div class="col-md-12" align="center">
                 <div style="margin-top:3em">
                 <a href="{{ url('/register') }}">สมัครสมาชิก</a>
                 </div>
             </div>

        </div>

    </div>

      </form> --}}
</div>
@endsection 