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
                    <td>ศาลเจ้าพ่อหลักเมืองตาก (เก่า)</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>อุทยานแห่งชาติลานสาง</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>ตลาดชาวเขาดอยมูเซอ</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>จุดชมวิวเส้นทาง ตาก-แม่สอด</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>ศาลเจ้าพ่อพระวอ</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>ตลาดริมเมย</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">8</th>
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
                <img src="{{ asset('img/route/2.png') }}" alt="" srcset="" width="100%" data-toggle="modal"  data-target="#photomodal">
            </center>
        </div>
        <div class="col-12">
          <hr>
        </div>
        <div class="col-12 mt-3 mb-1" align="center">
            <h3><u>บรรยากาศสถานที่ในเส้นทาง</u></h3>
            {{-- <span id="dots"></span>
            <button onclick="readmorebtn()" class="btn btn-success mt-2 mb-2" id="myBtn">แสดงภาพบรรยากาศสถานที่</button>
            <span id="more"> --}}
              <div class="row route_landscape-row">
                <div class="col-12">
                  <h4>ศาลหลักเมืองสี่มหาราช</h4>
                  <div style="padding-top:1em;padding-bottom:2em;" class="route_carousel" data-flickity='{ "percentPosition": false,"pageDots": false}'>
                    <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-1/center4m1.jpg') }}" width="100%">
                    </div>
                    <div  class="carousel-cell">
                      <img src="{{ asset('img/route/img-1/center4m2.jpg') }}" width="100%">
                    </div>
                    <div  class="carousel-cell">
                      <img src="{{ asset('img/route/img-1/center4m3.jpg') }}" width="100%">
                    </div>
                    <div  class="carousel-cell">
                      <img src="{{ asset('img/route/img-1/center4m4.jpg') }}" width="100%">
                    </div>
                  </div>
                  <center>
                    <p style="color: rgb(117, 117, 117)">ข้อมูลจาก : thailandtourismdirectory.go.th</p>
                  </center>
              </div>
                    
                <div class="col-12">
                    <h4>ศาลเจ้าพ่อหลักเมืองตาก (เก่า)</h4>
                    <iframe src="https://momento360.com/e/u/42fbacb0cbd344e5bf36bd5b7c446a68?utm_campaign=embed&utm_source=other&heading=-166.36&pitch=1.35&field-of-view=75&size=medium" frameborder="0"></iframe>
                </div>
                <div class="col-12">
                  <h4>อุทยานแห่งชาติลานสาง</h4>
                  <div style="padding-top:1em;padding-bottom:2em;" class="route_carousel" data-flickity='{ "percentPosition": false,"pageDots": false}'>
                    <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-2/lansang1.jpg') }}" width="100%">
                    </div>
                    <div  class="carousel-cell">
                      <img src="{{ asset('img/route/img-2/lansang2.jpg') }}" width="100%">
                    </div>
                    <div  class="carousel-cell">
                      <img src="{{ asset('img/route/img-2/lansang3.jpg') }}" width="100%">
                    </div>
                    <div  class="carousel-cell">
                      <img src="{{ asset('img/route/img-2/lansang4.jpg') }}" width="100%">
                    </div>
                  </div>
                  <center>
                    <p style="color: rgb(117, 117, 117)">ข้อมูลจาก : Facebook @ LansangNationalPark</p>
                  </center>
              </div>
                    
 
                <div class="col-12">
                    <h4>ตลาดชาวเขาดอยมูเซอ</h4>
                    <div style="padding-top:1em;padding-bottom:2em;" class="route_carousel" data-flickity='{ "percentPosition": false,"pageDots": false, "fade": true ,"freeScroll": true , "imagesLoaded": true}'>
                            <button  class="carousel-cell">
                              <img src="{{ asset('img/route/img-2/mu-1.jpg') }}" width="100%">
                            </button>
                            <button  class="carousel-cell">
                              <img src="{{ asset('img/route/img-2/mu-2.jpg') }}" width="100%">
                            </button>
                            <button  class="carousel-cell">
                              <img src="{{ asset('img/route/img-2/mu-3.jpg') }}" width="100%">
                            </button>
                            <button  class="carousel-cell">
                              <img src="{{ asset('img/route/img-2/mu-4.jpg') }}" width="100%">
                            </button>
                            <button  class="carousel-cell">
                              <img src="{{ asset('img/route/img-2/mu-5.jpg') }}" width="100%">
                            </button>
                            <button  class="carousel-cell">
                            <img src="{{ asset('img/route/img-2/mu-6.jpg') }}" width="100%">
                            </button>
                            <button  class="carousel-cell">
                              <img src="{{ asset('img/route/img-2/mu-7.jpg') }}" width="100%">
                            </button>
                    </div>
                  </div>
                  <div class="col-12">
                    <h4>ศาลเจ้าพ่อพระวอ</h4>
                    <iframe width="100%" height="640" style="width: 100%; height: 640px; border: none; max-width: 100%;" frameborder="0" allow="vr,gyroscope,accelerometer,fullscreen" scrolling="no" allowfullscreen="true" src="https://kuula.co/share/7Y8Y8?fs=1&amp;vr=0&amp;thumbs=1&amp;chromeless=0&amp;logo=0"></iframe>
                    <center>
                      <p style="color: rgb(117, 117, 117)">ข้อมูลจาก : it.tak.rmutl.ac.th/tour3d </p>
                    </center>
                  </div>
                  <div class="col-12">
                    <h4>ศาลสมเด็จพระนเรศวรมหาราช จ.ตาก</h4>
                    <div style="padding-top:1em;padding-bottom:2em;" class="route_carousel" data-flickity='{ "percentPosition": false,"pageDots": false}'>
                      <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-2/sanpranaret1.jpg') }}" width="100%">
                      </div>
                      <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-2/sanpranaret2.jpg') }}" width="100%">
                      </div>
                      <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-2/sanpranaret3.jpg') }}" width="100%">
                      </div>
                      <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-2/sanpranaret4.jpg') }}" width="100%">
                      </div>
                      <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-2/sanpranaret5.jpg') }}" width="100%">
                      </div>
                    </div>
                    <center>
                      <p style="color: rgb(117, 117, 117)">ข้อมูลจาก : www.paiduaykan.com</p>
                    </center>
                </div>
                <div class="col-12">
                    <h4>ตลาดริมเมย จ.ตาก</h4>
                    <div style="padding-top:1em;padding-bottom:2em;" class="route_carousel" data-flickity='{ "percentPosition": false,"pageDots": false}'>
                      <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-2/rimmei1.jpg') }}" width="100%">
                      </div>
                      <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-2/rimmei2.jpg') }}" width="100%">
                      </div>
                      <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-2/rimmei3.jpg') }}" width="100%">
                      </div>
                      <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-2/rimmei4.jpg') }}" width="100%">
                      </div>
                      <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-2/rimmei5.jpg') }}" width="100%">
                      </div>
                    </div>
                    <center>
                      <p style="color: rgb(117, 117, 117)">ข้อมูลจาก : hailandtourismdirectory.go.th/</p>
                    </center>
                </div>
                  <div class="col-12">
                    <center>
                      {{-- <button onclick="readmorebtn()" class="btn btn-success mt-2 mb-2" id="myBtn">ซ่อนเนื้อหา</button> --}}
                    </center>
                    <hr class="mt-2 mb-2">
                  </div>
              {{-- </span> --}}
            </div>
        </div>
        <div class="col-12" style="margin-top: 3em">
            <center>
                <h2>แผนที่สถานที่ในเส้นทาง</h2>
            </center>
            <iframe src="https://www.google.co.th/maps/d/u/0/embed?mid=1DOW5ZN7cI-I05Lj9V7V9jZz9itpyWh0t"></iframe>
        </div>
        <div class="col-12 route_nav mt-3">
          <div class="h3 mt-2 mb-2">
            <center>
              เส้นทางอื่น ๆ
            </center>
          </div>
            <div class="row">
              <div class="col-12 col-md-6 col-xl-3">
                <a href="{{ url('route/1') }}">
                  <button id="btn_route-1" class="btn_route-nav">
                    เส้นทางพ่อขุนรามคำแหงมหาราช
                  </button> 
                </a>
              </div>
              <div class="col-12 col-md-6 col-xl-3">
                <a href="{{ url('route/3') }}">
                  <button id="btn_route-3" class="btn_route-nav">
                    เส้นทางสมเด็จพระนารายณ์มหาราช
                  </button> 
                </a>
              </div>
              <div class="col-12 col-md-6 col-xl-3">
                <a href="{{ url('route/4') }}">
                  <button id="btn_route-4" class="btn_route-nav" >
                    เส้นทางสมเด็จพระเจ้าตากสินมหาราช
                  </button> 
                </a>
              </div>
              <div class="col-12 col-md-6 col-xl-3">
                <a href="{{ url('route/5') }}">
                  <button id="btn_route-5" class="btn_route-nav" >
                    เส้นทางสมเด็จพระมหาภูมิพลอดุลยเดชมหาราช
                  </button> 
                </a>
              </div>
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