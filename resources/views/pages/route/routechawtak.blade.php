@extends('weblayouts.default') 
@section('content')
<div class="container" style="padding-top: 10vh; padding-bottom:5vh">
    <div class="row">
        <div class="col-12 col-md-6" align="center">
                <img class="photo_frame-4" src="{{ asset('img/route/pro_route4.jpg') }}" width="100%">
        </div>
        <div class="col-12 col-md-6">
            <h1>เส้นทางสมเด็จพระเจ้าตากสินมหาราช</h1>
            <p>สมเด็จพระเจ้ากรุงธนบุรี หรือ สมเด็จพระเจ้าตากสินมหาราช[เชิงอรรถ 1] มีพระนามเดิมว่า สิน เป็นคนไทยเชื้อสายจีน ทรงเป็นพระมหากษัตริย์ผู้ก่อตั้งอาณาจักรธนบุรี และเป็นพระมหากษัตริย์พระองค์เดียวของราชอาณาจักรธนบุรี
              เดิมพระองค์เป็นนายทหารในรัชกาลสมเด็จพระที่นั่งสุริยาศน์อมรินทร์ ต่อมา พ.ศ. 2310 เกิดการเสียกรุงศรีอยุธยาครั้งที่สอง พระองค์ได้เป็นผู้นำขับไล่ทหารพม่าที่ยึดครองกรุงศรีอยุธยาอยู่ในเวลานั้น และได้ปราบดาภิเษกเป็นพระเจ้ากรุงศรีอยุธยาอีกเจ็ดเดือนถัดมาโดยพระองค์ย้ายเมืองหลวงไปยังกรุงธนบุรี และรวบรวมแผ่นดินซึ่งมีขุนศึกก๊กต่าง ๆ ปกครองให้กลับเป็นปึกแผ่นอีกครั้ง เช่นเดียวกับการขยายอาณาเขตออกไปอย่างกว้างขวาง นอกจากนี้ ยังทรงฟื้นฟูราชอาณาจักรในด้านต่าง ๆ ให้กลับคืนสู่สภาวะปกติหลังสงคราม ทั้งส่งเสริมกิจการด้านเศรษฐกิจ ศาสนา ศิลปวัฒนธรรม วรรณกรรม และการศึกษา ภายหลังรัฐบาลไทยประกาศให้วันที่ 28 ธันวาคมของทุกปีเป็น "วันสมเด็จพระเจ้าตากสิน" และยังทรงได้รับสมัญญานามมหาราช
              พระองค์เสด็จสวรรคตเมื่อวันที่ 6 เมษายน พ.ศ. 2325 เมื่อพระชนมพรรษา 48 พรรษา หลังถูกสมเด็จเจ้าพระยามหากษัตริย์ศึกซึ่งเป็นพระสหายสำเร็จโทษ และสืบราชสมบัติต่อเป็นต้นราชวงศ์จักรีในปัจจุบัน รวมเวลาครองราชย์ 15 ปี พระองค์มีพระราชโอรสและพระราชธิดารวมทั้งสิ้น 30 พระองค์พระองค์ทรงเป็นวีรกษัตริย์ของชาติไทยที่ประชาชนรู้จักดีและเป็นที่เคารพสักการะมากที่สุดพระองค์หนึ่ง นอกจากนี้ยังมีพระบรมราชานุสรณ์ของพระองค์มีประดิษฐานมากที่สุด</p>
        </div>
        <div class="col-12 col-md-6" style="margin-top: 3em">
            <div class="col-12">
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
                        <td>วัดดอยข่อยเขาแก้ว </td>
                        {{-- <td>@fat</td> --}}
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>ศาลเจ้าพ่อหลักเมืองเก่า</td>
                        {{-- <td>@fat</td> --}}
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>ศาลสมเด็จพระเจ้าตากสินมหาราช</td>
                        {{-- <td>@fat</td> --}}
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>ตรอกบ้านจีน</td>
                        {{-- <td>@fat</td> --}}
                      </tr>
                    </tbody>
                  </table>
            </div>
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
                  <img src="{{ asset('img/route/4.png') }}" alt="" srcset="" width="100%">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
            <center>
                <img src="{{ asset('img/route/4.png') }}" alt="" srcset="" width="100%" data-toggle="modal"  data-target="#photomodal">
            </center>
        </div>
        <div class="col-12">
          <hr>
        </div>
        <div class="col-12 mt-3 mb-1" align="center">
            <h3><u>บรรยากาศสถานที่ในเส้นทาง</u></h3>

      
              <div class="row route_landscape-row">
                <div class="col-12">
                  <h4>ศาลหลักเมืองสี่มหาราช</h4>
                  <div style="padding-top:1em;padding-bottom:2em;" class="route_carousel" data-flickity='{ "percentPosition": false,"pageDots": false}'>
                    <div  class="carousel-cell">
                        <img src="{{ asset('img/route/img-4/center4m1.jpg') }}" width="100%">
                    </div>
                    <div  class="carousel-cell">
                      <img src="{{ asset('img/route/img-4/center4m2.jpg') }}" width="100%">
                    </div>
                    <div  class="carousel-cell">
                      <img src="{{ asset('img/route/img-4/center4m3.jpg') }}" width="100%">
                    </div>
                    
                  </div>
                  <center>
                    <p style="color: rgb(117, 117, 117)">ข้อมูลจาก : thailandtourismdirectory.go.th</p>
                  </center>
              </div>
             
                <div class="col-12">
                    <h4>วัดดอยข่อยเขาแก้ว</h4>
                    <iframe src="https://momento360.com/e/u/4ecb0117354544aa9ecbd702ffa2f0f0?utm_campaign=embed&utm_source=other&heading=-166.67&pitch=-11.83&field-of-view=75&size=medium" frameborder="0"></iframe>
                </div>
                <div class="col-12">
                    <h4>ศาลเจ้าพ่อหลักเมืองตาก</h4>
                    <iframe src="https://momento360.com/e/u/42fbacb0cbd344e5bf36bd5b7c446a68?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium" frameborder="0"></iframe>
                </div>
                <div class="col-12">
                  <h4>ศาลสมเด็จพระเจ้าตากสินมหาราช</h4>
                  <iframe src="https://momento360.com/e/u/daa1ffb3022f470eb9a0e5cb1956825f?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium" frameborder="0"></iframe>
              </div>
                <div class="col-12">
                    <h4>ตรอกบ้านจีน</h4>
                    <div style="padding-top:1em;padding-bottom:2em;" class="route_carousel" data-flickity='{ "percentPosition": false,"pageDots": false}'>
                            <div  class="carousel-cell">
                                <img src="{{ asset('img/route/img-4/cn-1.jpg') }}" width="100%">
                            </div>
                            <div  class="carousel-cell">
                              <img src="{{ asset('img/route/img-4/cn-2.jpg') }}" width="100%">
                            </div>
                            <div  class="carousel-cell">
                              <img src="{{ asset('img/route/img-4/cn-3.jpg') }}" width="100%">
                            </div>
                            <div  class="carousel-cell">
                              <img src="{{ asset('img/route/img-4/cn-4.jpg') }}" width="100%">
                            </div>
                            <div  class="carousel-cell">
                              <img src="{{ asset('img/route/img-4/cn-5.jpg') }}" width="100%">
                            </div>
                            <div  class="carousel-cell">
                            <img src="{{ asset('img/route/img-4/cn-6.jpg') }}" width="100%">
                            </div>
                    </div>
                  </div>
                  <div class="col-12">
                    {{-- <center>
                      <button onclick="readmorebtn()" class="btn btn-success mt-2 mb-2" id="myBtn">ซ่อนเนื้อหา</button>
                    </center> --}}
                    <hr class="mt-2 mb-2">
                  </div>
              
            </div>
        </div>
        <div class="col-12" style="margin-top: 3em">
            <center>
                <h2>แผนที่สถานที่ในเส้นทาง</h2>
            </center>
            
            <iframe src="https://www.google.co.th/maps/d/embed?mid=1jwrLCjI8yPc0aVr3_ye1OKcjbzR5lSoB"></iframe>
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
                <a href="{{ url('route/3') }}">
                  <button id="btn_route-3" class="btn_route-nav" >
                    เส้นทางสมเด็จพระนารายณ์มหาราช
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