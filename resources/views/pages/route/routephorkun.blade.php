@extends('weblayouts.default') 
@section('content')
<div class="container" style="padding-top: 10vh; padding-bottom:5vh">
    <div class="row">
        <div class="col-12 col-md-6" align="center">
                <img class="photo_frame-1" src="{{ asset('img/route/pro_route1.jpg') }}" width="100%">
        </div>
        <div class="col-12 col-md-6">
            <h1>พ่อขุนรามคำแหงมหาราช</h1>
            <p>พ่อขุนรามคำแหงมหาราช หรือ พญาร่วง หรือ พระบาทกมรเตงอัญศรีรามราช[1] เป็นพระมหากษัตริย์พระองค์ที่ 3 ในราชวงศ์พระร่วงแห่งราชอาณาจักรสุโขทัย เสวยราชย์ประมาณ พ.ศ. 1822 ถึงประมาณ พ.ศ. 1842 พระองค์ทรงเป็นกษัตริย์พระองค์แรกของไทยที่ได้รับการยกย่องเป็น "มหาราช" ด้วยทรงบำเพ็ญพระราชกรณียกิจอันทรงคุณประโยชน์แก่แผ่นดิน ทรงรวบรวมอาณาจักรไทยจนเป็นปึกแผ่นกว้างขวาง ทั้งยังได้ทรงประดิษฐ์ตัวอักษรไทยขึ้น ทำให้ชาติไทยได้สะสมความรู้ทางศิลปะ วัฒนธรรม และวิชาการต่าง ๆ สืบทอดกันมากกว่าเจ็ดร้อยปี</p>
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
                        <td>อุทยานไม้กลายเป็นหิน</td>
                        {{-- <td>@fat</td> --}}
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>วัดพระบรมธาตุ</td>
                        {{-- <td>@fat</td> --}}
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>กาดต้าตง</td>
                        {{-- <td>@fat</td> --}}
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>เจดีย์ยุธหัตถี</td>
                        {{-- <td>@fat</td> --}}
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        
        <div class="col-12 col-md-6" style="margin-top: 3em">
          <div class="modal fade" id="photomodal" tabindex="-1" aria-labelledby="photomodalLabel" aria-hidden="true">
            <div  class="modal-dialog modal-xl">
              <div class="modal-content" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{ asset('img/route/1.png') }}" alt="" srcset="" width="100%">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
            <center>
                <img src="{{ asset('img/route/1.png') }}" alt="" srcset="" width="100%" data-toggle="modal"  data-target="#photomodal">
            </center>
        </div>
        <div class="col-12">
          <hr>
        </div>
        <div class="col-12 mt-3 mb-1" align="center">
            <h3><u>บรรยากาศสถานที่ในเส้นทาง</u></h3>
            {{-- <span id="dots"></span> --}}
            {{-- <button onclick="readmorebtn()" class="btn btn-success mt-2 mb-2" id="myBtn">แสดงภาพบรรยากาศสถานที่</button>
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
                    
            </div>
                <div  id="wood" class="col-12">
                    <h4>อุทยานไม้กลายเป็นหิน</h4>
                    <iframe src="https://momento360.com/e/u/65ddb603029b4d4f9c639a21fb8c3b28?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=80&size=medium" frameborder="0"></iframe>
                </div>
                <div class="col-12">
                  <h4>กาดต้าตง</h4>
                  <div style="padding-top:1em;padding-bottom:2em;" class="route_carousel" data-flickity='{ "percentPosition": false,"pageDots": false}'>
                    <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-1/tathong-1.jpg') }}" width="100%">
                    </div>
                    <div  class="carousel-cell">
                      <img src="{{ asset('img/route/img-1/tathong-2.jpg') }}" width="100%">
                    </div>
                    <div  class="carousel-cell">
                      <img src="{{ asset('img/route/img-1/tathong-3.jpg') }}" width="100%">
                    </div>
                    
                  </div>
                  <center>
                   
                    <p style="color: rgb(117, 117, 117)">ข้อมูลจาก : Facebook @ kadtatong</p>
                  </center>
              </div>
                <div class="col-12">
                    <h4 id="wadbarom">วัดพระบรมธาตุ</h4>
                    <iframe src="https://momento360.com/e/u/6ba3abefee0d40f4b8e19f9674d564f0?utm_campaign=embed&utm_source=other&heading=-371.32&pitch=-7.18&field-of-view=75&size=medium" frameborder="0"></iframe>
                </div>
                <div class="col-12">
                    <h4 id="wadbarom">เจดีย์ยุธหัตถี</h4>
                    <div style="padding-top:1em;padding-bottom:2em;" class="route_carousel" data-flickity='{ "percentPosition": false,"pageDots": false}'>
                            <button  class="carousel-cell">
                                <img src="{{ asset('img/route/img-1/jd-4.jpg') }}" width="100%">
                            </button>
                            <button  class="carousel-cell">
                              <img src="{{ asset('img/route/img-1/jd-2.jpg') }}" width="100%">
                            </button>
                            <button  class="carousel-cell">
                              <img src="{{ asset('img/route/img-1/jd-3.jpg') }}" width="100%">
                            </button>
                            <button  class="carousel-cell">
                              <img src="{{ asset('img/route/img-1/jd-1.jpg') }}" width="100%">
                            </button>
                            <button  class="carousel-cell">
                              <img src="{{ asset('img/route/img-1/jd-5.jpg') }}" width="100%">
                            </button>
                            <button  class="carousel-cell">
                            <img src="{{ asset('img/route/img-1/jd-6.jpg') }}" width="100%">
                            </button>
                            <button  class="carousel-cell">
                              <img src="{{ asset('img/route/img-1/jd-7.jpg') }}" width="100%">
                            </button>
                    </div>
                  </div>
                  <div class="col-12">
                    {{-- <center>
                      <button onclick="readmorebtn()" class="btn btn-success mt-2 mb-2" id="myBtn">ซ่อนเนื้อหา</button>
                    </center> --}}
                    <hr class="mt-2 mb-2">
                  </div>
              {{-- </span> --}}
            </div>
        </div>
        <div class="col-12" style="margin-top: 3em">
            <center>
                <h2>แผนที่สถานที่ในเส้นทาง</h2>
            </center>
            <iframe src="https://www.google.co.th/maps/d/embed?mid=1Of9exRMq073iW9uZe50galDiBmvDn3-L"></iframe>
        </div>
        <div class="col-12 route_nav mt-3">
          <div class="h3 mt-2 mb-2">
            <center>
              เส้นทางอื่น ๆ
            </center>
          </div>
            <div class="row">
              <div class="col-12 col-md-6 col-xl-3">
                <a href="{{ url('route/2') }}">
                  <button id="btn_route-2" class="btn_route-nav">
                    เส้นทางสมเด็จพระนเรศวรมหาราช
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