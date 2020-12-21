@extends('weblayouts.default')
@section('member-active','active')
@section('content')
<div class="container" style="margin-top: 5vh; padding-top : 5vh;padding-bottom : 5vh">
  
<br>
<h1 align="center"> แก้ใขข้อมูล </h1>
<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row justify-content-center">
  <div class="col-6">
    <form method="POST" class="form-group" action="{{ url('user/'.$o_data->id.'') }}" >
      <input type="hidden" name="_method" value="PUT">
      {{csrf_field()}}
      <label for="formGroupExampleInput2">กรุณากรอกชื่อ</label>
      <div class="row">
          <div class="col-6">
          <input type="text" class="form-control" name="name" id="name" value="{{ $o_data->name }}" >
          </div>
          <div class="col-6">
          <input type="text" class="form-control" name="lastname" id="lastname" value="{{ $o_data->lastname }}">
          </div>
      </div>
      <div class="form-group">
          <label for="formGroupExampleInput2">จังหวัด</label>
          <input type="text" class="form-control" name="prov" id="prov" value="{{ $o_data->prov }}">
      </div>
      <button type="submit" id="btn-submit" name="Submit" value="Submit"  class="btn btn-success btn-block">ยืนยัน</button>
  
  </form>
   </div>
</div>

</div>
@endsection    