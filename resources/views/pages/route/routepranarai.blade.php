@extends('weblayouts.default') 
@section('content')
<div class="container" style="padding-top: 10vh; padding-bottom:5vh">
    <div class="row">
        <div class="col-12 col-md-6" align="center">
                <img class="photo_frame-3" src="{{ asset('img/route/pro_route3.jpg') }}" width="100%">
        </div>
        <div class="col-12 col-md-6">
            <h1>เส้นทางสมเด็จพระนารายณ์มหาราช</h1>
            <p>สมเด็จพระนารายณ์มหาราช เสด็จพระราชสมภพเมื่อวันจันทร์ เดือนยี่ ปีวอก พ.ศ. 2175 เป็นพระราชโอรสในสมเด็จพระเจ้าปราสาททอง กับพระราชเทวีไม่ปรากฏพระนาม คำให้การชาวกรุงเก่า ระบุว่าพระชนนีของพระองค์ชื่อพระสุริยา ส่วน คำให้การขุนหลวงหาวัด ระบุพระนามว่าพระอุบลเทวี และหม่อมหลวงมานิจ ชุมสาย ระบุพระนามว่าพระนางศิริธิดา และมีพระขนิษฐาร่วมพระมารดาคือกรมหลวงโยธาทิพ (หรือพระราชกัลยาณี)</p>
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
                    <td>วัดพระนารายณ์</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>หาดทรายทอง</td>
                    
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>สะพานสมโภชกรุงรัตน์โกสินทร์ 200 ปี</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>ตลาดนัดริมแม่น้ำปิง</td>
                    {{-- <td>@fat</td> --}}
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>กาดนั่งยอง</td>

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
                  <img src="{{ asset('img/route/3.png') }}" alt="" srcset="" width="100%">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
            <center>
                <img src="{{ asset('img/route/3.png') }}" alt="" srcset="" width="100%" data-toggle="modal"  data-target="#photomodal">
            </center>
        </div>
        <div class="col-12 mt-3 mb-1" align="center">
          <h3><u>บรรยากาศสถานที่ในเส้นทาง</u></h3>
          {{-- <span id="dots"></span> --}}
          {{-- <button onclick="readmorebtn()" class="btn btn-success mt-2 mb-2" id="myBtn">แสดงภาพบรรยากาศสถานที่</button> --}}
          {{-- <span id="more"> --}}
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
                  {{-- <div  class="carousel-cell">
                    <img src="{{ asset('img/route/img-1/center4m4.jpg') }}" width="100%">
                  </div> --}}
                </div>
                <center>
                  <p style="color: rgb(117, 117, 117)">ข้อมูลจาก : thailandtourismdirectory.go.th</p>
                </center>
            </div>
            <div class="col-12">
              <h4>วัดพระนารายณ์</h4>
              <div style="padding-top:1em;padding-bottom:2em;" class="route_carousel" data-flickity='{ "percentPosition": false,"pageDots": false}'>
                <div  class="carousel-cell">
                    <img src="{{ asset('img/route/img-3/wad1.png') }}" width="100%">
                </div>
                <div  class="carousel-cell">
                  <img src="{{ asset('img/route/img-3/wad2.png') }}" width="100%">
                </div>
                <div  class="carousel-cell">
                  <img src="{{ asset('img/route/img-3/wad3.png') }}" width="100%">
                </div>
                <div  class="carousel-cell">
                  <img src="{{ asset('img/route/img-3/wad4.png') }}" width="100%">
                </div>
              </div>
              <center>
                <p style="color: rgb(117, 117, 117)">ข้อมูลจาก : Google Map</p>
              </center>
          </div>
          <div class="col-12">
            <h4>หาดทรายทอง</h4>
            <div style="padding-top:1em;padding-bottom:2em;" class="route_carousel" data-flickity='{ "percentPosition": false,"pageDots": false}'>
              <div  class="carousel-cell">
                  <img src="{{ asset('img/route/img-3/hadsai1.jpg') }}" width="100%">
              </div>
              <div  class="carousel-cell">
                <img src="{{ asset('img/route/img-3/hadsai2.jpg') }}" width="100%">
              </div>
              <div  class="carousel-cell">
                <img src="{{ asset('img/route/img-3/hadsai3.jpg') }}" width="100%">
              </div>
              <div  class="carousel-cell">
                <img src="{{ asset('img/route/img-3/hadsai4.jpg') }}" width="100%">
              </div>
              <div  class="carousel-cell">
                <img src="{{ asset('img/route/img-3/hadsai5.jpg') }}" width="100%">
              </div>
              <div  class="carousel-cell">
                <img src="{{ asset('img/route/img-3/hadsai6.jpg') }}" width="100%">
              </div>
            </div>
            <center>
              <p style="color: rgb(117, 117, 117)">ข้อมูลจาก : www.thai-tour.com</p>
            </center>
        </div>
              <div  id="wood" class="col-12">
                  <h4>สะพานสมโภชกรุงรัตน์โกสินทร์</h4>
                  <iframe src="https://momento360.com/e/u/159286e3f2764df59ea7012d30757a3f?utm_campaign=embed&utm_source=other&heading=-298.8&pitch=-9.03&field-of-view=75&size=medium" frameborder="0"></iframe>
              </div>
              <div class="col-12">
                  <h4 id="wadbarom">กาดนั่งยองคล้องย่าม</h4>
                  <iframe src="https://momento360.com/e/u/b59c431124694862a184d2c43fd06590?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium" frameborder="0"></iframe>
              </div>
             
                <div class="col-12">
                 
                  <hr class="mt-2 mb-2">
                </div>
            {{-- </span> --}}
          </div>
      </div>
        <div class="col-12" style="margin-top: 3em">
            <center>
                <h2>แผนที่สถานที่ในเส้นทาง</h2>
            </center>
            
            <iframe src="https://www.google.co.th/maps/d/embed?mid=1pRk2rdeCHCNc2WfZaz9EPwPEGrqXVZ4d"></iframe>
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
                <a href="{{ url('route/2') }}">
                  <button id="btn_route-2" class="btn_route-nav">
                    เส้นทางสมเด็จพระนเรศวรมหาราช
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
  
</script>
@endsection