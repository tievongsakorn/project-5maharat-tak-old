@extends('weblayouts.default')
@section('content')
<div class="container" style="margin-top: 5vh; padding-top : 5vh;padding-bottom : 5vh">
  
<br>
<h1 align="center"> เปลี่ยนรหัสผ่าน </h1>
<br>
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li  id="msg-error">{{ $error }}</li>
                
            @endforeach
        </ul>
    </div>
@endif
<div class="row justify-content-center">
  <div class="col-6">
    <form method="POST" class="form-group" action="{{ url('pass_update') }}" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <label for="currect_pass">รหัสผ่านปัจจุบัน</label>
        <input type="password" class="form-control" name="currect_pass" id="currect_pass" value="" required>
        </div>
        <div class="form-group">
            <label for="new_pass">รหัสผ่านใหม่</label>
            <input type="password" class="form-control" name="new_pass" id="new_pass" value="" required>
        </div>
      <div class="form-group">
          <label for="confirm_newpass">ยืนยันรหัสผ่านใหม่</label>
          <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="" required>
      </div>
      <input type="hidden" name="username" value="{{ Auth::user()->username }}">
      <button type="submit" id="btn-submit" name="Submit" value="Submit"  class="btn btn-success btn-block">ยืนยัน</button>
  
  </form>
   </div>
</div>

</div>
@endsection