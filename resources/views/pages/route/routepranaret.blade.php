@extends('weblayouts.default') 
@section('content')
<div class="container" style="padding-top: 10vh; padding-bottom:5vh">
    <div class="row">
        <div class="col-12 col-md-6" align="center">
                <img class="photo_frame-2" id="route-2" src="{{ asset('img/route/pro_route2.jpg') }}" width="100%">
        </div>
        <div class="col-12 col-md-6">
            <h1>เส้นทางสมเด็จพระนเรศวรมหาราช</h1>
            <p>สมเด็จพระนเรศวรมหาราช มีพระนามเดิมว่าพระนเรศ หรือ "พระองค์ดำ" เป็นพระราชโอรสในสมเด็จพระมหาธรรมราชาธิราชและพระวิสุทธิกษัตรีย์ เสด็จพระราชสมภพเมื่อ พ.ศ. 2098 ที่พระราชวังจันทน์ เมืองพิษณุโลก มีพระเชษฐภคินีคือพระสุพรรณกัลยา มีพระอนุชาคือสมเด็จพระเอกาทศรถ (องค์ขาว) เสด็จขึ้นครองราชย์เมื่อวันที่ 29 กรกฎาคม พ.ศ. 2133 ครองราชสมบัติ 15 ปี เสด็จสวรรคตเมื่อวันที่ 25 เมษายน พ.ศ. 2148 สิริพระชนมพรรษา 49 พรรษา</p>
        </div>
        <div class="col-12 col-md-6" style="margin-top: 3em">
          <div class="col-12">
            <h2>รายชื่อสถานที่ในเส้นทาง</h2>
            <table class="table  table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ลำดับที่</th>
                    <th scope="col">สถานที่</th>
                    {{-- <th scope="col">ประเภท</th> --}}
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>ศาลหลักเมืองสี่มหาราช</td>
                    {{-- <td></td> --}}
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>อุทยานแห่งชาติลานสาง</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>ตลาดชาวเขาดอยมูเซอ</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>จุดชมวิวเส้นทาง ตาก-แม่สอด</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>ศาลเจ้าพ่อพระวอ</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>ตลาดริมเมย</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>ศาลสมเด็จพระนเรศวรมหาราช</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                </tbody>
              </table>
        </div>
            
        </div>
        <div class="modal fade" id="photomodal" tabindex="-1" aria-labelledby="photomodalLabel" aria-hidden="true">
            <div  class="modal-dialog modal-xl">
              <div class="modal-content" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{ asset('img/route/2.png') }}" alt="" srcset="" width="100%">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <div class="col-12 col-md-6" style="margin-top: 3em">
          
            <center>
                <img src="{{ asset('img/route/2.PNG') }}" alt="" srcset="" width="100%" data-toggle="modal"  data-target="#photomodal">
            </center>
        </div>
        <div class="col-12" style="margin-top: 3em">
            <center>
                <h2>แผนที่สถานที่ในเส้นทาง</h2>
            </center>
            
            <iframe src="https://www.google.co.th/maps/d/u/0/embed?mid=1DOW5ZN7cI-I05Lj9V7V9jZz9itpyWh0t"></iframe>
        </div>
        
        <div class="col-12" style="margin-top: 3em">
          <hr>
          <div class="row">
            @if (isset(Auth::user()->username))
                @if ($errors->any())
                 <div class="col-12">
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <center>
                            <h5>กรุณากรอกความคิดเห็น</h5>
                          </center>
                        @endforeach
                    </ul>
                </div>
                 </div>
                @endif
              <div class="col-12">
                <form action="{{ url('comment') }}" method="POST">
                  
                  {{ csrf_field() }}
                  <div class="form-group">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div ><h3>แสดงความคิดเห็น</h3></div> 
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="row">
                          <div class="col-12 col-md-5">
                            <h3>ให้คะแนนเส้นทาง </h3>
                          </div>
                          <div class="col-12 col-md-7">
                            <div class="rate">
                              <input type="radio" id="star5" name="rate" value="5" />
                              <label for="star5" title="text" >5 stars</label>
                              <input type="radio" id="star4" name="rate" value="4" />
                              <label for="star4" title="text">4 stars</label>
                              <input type="radio" id="star3" name="rate" value="3" />
                              <label for="star3" title="text">3 stars</label>
                              <input type="radio" id="star2"  name="rate" value="2" />
                              <label for="star2" title="text">2 stars</label>
                              <input type="radio" id="star1" name="rate" value="1" />
                              <label for="star1" title="text">1 star</label>
                            </div>
                          </div>
                        </div>
                        
      
                      </div>
                    </div>
                    <textarea type="text" class="  " name="comment_des" id="comment_des" placeholder="" required> </textarea>
                  </div>
                  <input type="hidden" name="route_id" value="2">
                  
                  <input type="hidden" name="username" value="{{ (Auth::user()->username) }}">
                  {{-- <input type="radio" name="" id=""> --}}
                  
                  <input type="submit" class="btn btn-primary" value="บันทึก">
                </form>
                <hr>
              </div>
              @else
              <div class="col-12">
                <div class="alert alert-info" role="alert">
                  <center>
                    <div style="padding: 1em">
                      <h4>เข้าสู่ระบบเพื่อแสดงความคิดเห็น</h4>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop"  href="{{url('member_toppic')}}">เข้าสู่ระบบ</a>
                    </div>
                  </center>
                </div>
              </div>
              @endif
            <div class="col-6">
              <h3>ความคิดเห็น</h3>
            </div>
            <div class="col-6">
                <div class="row">
                  <div class="col-4">
                    <h3>คะแนน <u>{{ $avg_rate_format }}</u></h3> 
                    
                  </div>
                  <div class="col-6">
                    @if ( $avg_rate_format >= 1 and $avg_rate_format < 2)
                              {{-- <h5>{{ $avg_rate_format }}</h5> --}}
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                              @elseif ( $avg_rate_format >= 2 and $avg_rate_format < 3)
                              {{-- <h5>{{ $avg_rate_format }}</h5> --}}
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                              @elseif ( $avg_rate_format >= 3 and $avg_rate_format < 4)
                              {{-- <h5>{{ $avg_rate_format }}</h5> --}}
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                              @elseif ( $avg_rate_format >= 4 and $avg_rate_format < 5) 
                              {{-- <h5>{{ $avg_rate_format }}</h5> --}}
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                              @elseif ( $avg_rate_format <=5 )
                              {{-- <h5>{{ $col->rate }}</h5> --}}
                                 <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                 <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                 <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                 <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                 <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                              @endif
                    
                  </div>
                </div>
            </div>
          </div>
          <hr>
          <div class="row">
            
            @if (isset($data))
                @foreach ($data as $col)
                  <div class="col-12">
                    <div class="comment_box">
                      <div class="row">
                        <div class="col-12 col-md-3">
                          <u><h4>{{ $col->username }}</h4></u>
                        </div>
                        <div class="col-12 col-md-7">
                              
                              @if ( $col->rate >= 1 and $col->rate < 2)
                              {{-- <h5>{{ $col->rate }}</h5> --}}
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>

                              @elseif ( $col->rate >= 2 and $col->rate < 3)
                              {{-- <h5>{{ $col->rate }}</h5> --}}
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                              @elseif ( $col->rate >= 3 and $col->rate < 4)
                              {{-- <h5>{{ $col->rate }}</h5> --}}
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                              @elseif ( $col->rate >= 4 and $col->rate < 5) 
                              {{-- <h5>{{ $col->rate }}</h5> --}}
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                              @elseif ( $col->rate <=5 )
                              {{-- <h5>{{ $col->rate }}</h5> --}}
                                 <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                 <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                 <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                 <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                                 <i class="fas fa-star score-star-avg" id="score-star-avg"></i>
                              @endif
                              
                        </div>
                        <div class="col-12">
                          <p>
                            {!! $col->comment_des !!}
                          </p>
                          <p>เวลา {{ $col->created_at }} </p>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
            @else
                
            @endif

          </div>
          
          </div>
        </div>
    </div>


<script> 
  CKEDITOR.replace( 'comment_des' );
  function changcolor() {
    document.getElementById('score-star-avg').style.color = 'red';
  }
  
  window.onload = function() {
    console.log("hello");
    // document.getElementById("star4").checked = true;
    }
</script>
@endsection