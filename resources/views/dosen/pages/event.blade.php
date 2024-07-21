<div class="blog_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <h1 class="about_taital text-center">Event Terbaru</h1>
          </div>
       </div>
       <div class="blog_section_2">
          <div class="row">
            @foreach ($news as $data)
               
            <div class="col-md-3">
               <div class="blog_box">
                  <div class="blog_img"><img src="{{asset('/storage/gambar_berita/'.$data->gambar)}}"></div>
                  <h4 class="date_text">{{\Carbon\Carbon::parse($data->tanggal)->isoFormat(' D MMMM ')}}</h4>
                  <h4 class="prep_text">{{$data->judul}}</h4>
                  <div class="read_btn"><a href="/berita/{{$data->id}}">Read More</a></div>
               </div>
            </div>
            
            @endforeach
          </div>
       </div>
    </div>
 </div>