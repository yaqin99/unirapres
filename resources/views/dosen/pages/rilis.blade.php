<div class="coffee_section layout_padding">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <h1 class="coffee_taital">RILIS TERBARU</h1>
        </div>
     </div>
  </div>
  <div class="coffee_section_2">
     <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
           <div class="carousel-item active">
              <div class="container-fluid">
                 <div class="row">
                  @foreach ($rilis as $sari )            
                    <div class="col-lg-3 col-md-6">
                       <div class="coffee_img"><img src="{{asset('/storage/cover/'.$sari->cover)}}"></div>
                       <div class="coffee_box">
                          <h3 class="types_text">{{$sari->judul_buku}}</h3>
                          {{-- <p class="looking_text">{{$sari->penulis}}</p> --}}
                          <div class="read_bt"><a href="#">Read More</a></div>
                       </div>
                    </div>
                  @endforeach
                 </div>
              </div>
           </div>
           
           
        </div>
        
     </div>
  </div>
</div>