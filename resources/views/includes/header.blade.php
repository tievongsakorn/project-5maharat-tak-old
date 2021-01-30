
 @if ($message = Session::get('error'))
 <script type="text/javascript">
  $(document).ready(function(){
      $('#staticBackdrop').modal('show')
  })
 </script>
 @endif
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">เข้าสู่ระบบ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="frmlogin"  method="post" action="{{ url('/member/checklogin') }}">
          @csrf
      <div class="login">
          
          <div class="row justify-content-md-center ">
              
              <div class="col-md-12" align="center">
                  <img src="img/brand.png" alt="" height="170px" srcset="">
              </div>
              @if ($message = Session::get('error'))
                  
                <div class="col-12">
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
                  <input class="mem_btn btn btn-success" type="submit" value="เข้าสู่ระบบ">
               </div>   
               <div class="col-md-12" align="center">
                   <div style="margin-top:3em">
                    ยังไม่มีสมาชิกยังนั้นหรือ ? <br><a class="" href="{{ url('/register') }}">สมัครสมาชิก</a>
                   </div>
               </div>
  
          </div>
  
      </div>
  
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
        
      </div>
    </div>
  </div>
</div>

{{-- <----------Modal login--------> --}}
<nav class="navbar navbar-expand-lg fixed-top static-top bg-nav">
  <div class="container-fluid">
    <a class="navbar-brand " href="{{url('/')}}">          {{-- <img src="{{ asset('img/brand.png') }}" alt="" height="63px"> --}}
      เส้นทางเชื่อมโยงการท่องเที่ยว <br>&nbsp;&nbsp;&nbsp;5 มหาราชจังหวัดตาก 
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <svg width="1.6em" height="1.6em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" >
          <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item  @yield('home-active')">
          <a class="nav-link" href="{{url('/')}}">หน้าแรก</a>
        </li>
        {{-- <li class="nav-item  @yield('route-active')">
          <a class="nav-link" href="{{url('/route')}}">เส้นทาง</a>
        </li> --}}
        <li class="nav-item ">
          <a class="nav-link  @yield('detail-active')"  href="{{url('detail')}}">ข้อมูลจังหวัดตาก</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link @yield('event-active')"   href="{{url('eventpage/1')}}">ปฏิทินกิจกรรม</a>
        </li>
        
        @if (isset(Auth::user()->username))
        <li class="nav-item @yield('member-active')">
          <a class="nav-link "   href="{{url('member_toppic')}}">สำหรับสมาชิก</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle member_dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ยินดีต้อนรับคุณ {{ Auth::user()->username }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a  class="dropdown-item" href="{{ url('/member/logout') }}">ลงชื่อออก</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/member/editprofile/') }}/{{ Auth::user()->username }}">ข้อมูลผู้ใช้งาน</a>
          </div>
        </li>
        @else 
        <li class="nav-item @yield('member-active')">
          <a class="nav-link " type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop"  href="{{url('member_toppic')}}">เข้าสู่ระบบ</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
