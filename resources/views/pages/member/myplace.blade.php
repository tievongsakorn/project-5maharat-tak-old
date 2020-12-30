@extends('weblayouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding-top: 5vh">
        <div class="col-12">
            <center>
            <h1>สถานที่แนะนำของคุณทั้งหมด</h1><br><br>
            </center>
        </div>
        <div class="col-5">
            <a href="{{ url('member_toppic/create') }}" class="btn btn-primary btn-block"> แนะนำสถานที่ </a> <br>
        </div>
        @if (isset($data[0]))
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ชื่อสถานที่</th>
                            <th scope="col">ประเภท</th>
                            <th scope="col">รายละเอียด</th>
                        <th scope="col">วันทีปรับปรุงข้อมูลล่าสุด</th>
                        <th scope="col">แก้ใข/ลบ</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $place)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $place->place_name }}</td>
                            <td>{{ $place->place_type }}</td>
                            <td>{!!$place->place_detail !!}</td>
                            <td>{{ $place->updated_at }}</td>
                            <td>
                                <a href="{{ url('member_toppic/'.$place->id.'/edit') }}" class="btn btn-warning">แก้ใข</a>
                                
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#PlaceDelModal">
                                    ลบสถานที่นี้
                                  </button>
                            </td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>
            </div>
            <div class="modal fade" id="PlaceDelModal" tabindex="-1" role="dialog" aria-labelledby="PlaceDelModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="PlaceDelModalLabel">ยืนยันการลบ</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <center>
                            คุณยืนยันที่จะลบสถานที่นี้ใช่หรือไม่
                        </center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                      <a href="{{ url('myplace/del/'.$place->id."") }}" class="btn btn-danger">ลบ</a>
                    </div>
                  </div>
                </div>
              </div>
        @else
        <div class="col-12" style="padding: 1em">
            <div class="alert alert-info" role="alert">
                <center>
                    <h4>คุณยังไม่มีสถานที่แนะนำ </h4>
                </center>
            </div>
        </div>
        @endif
        
{{--         
        @foreach ($data as $place)
        <div class="col-10">
            <div class="row justify-content-center myplace_box">
                <div class="col-12 col-md-3" style="border-right: 2px black solid">
                    {{ $place->place_name }} <br>
                    <u>{{ $place->place_type }}</u>

                </div>
                <div class="col-12 col-md-3" style="border-right: 2px black solid">
                    {!! $place->place_detail !!}
                </div>
                <div class="col-12 col-md-3" style="border-right: 2px black solid">
                    {{ $place->updated_at }}
                </div>
                <div class="col-12 col-md-3">
                    <a href="" class="btn btn-warning">แก้ใข</a>
                    <a href="" class="btn btn-danger">ลบ</a>
                </div>
            </div>
        </div>
        @endforeach
    </div> --}}
</div>
@endsection