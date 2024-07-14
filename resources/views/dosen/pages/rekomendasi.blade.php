

<section id="instagram" class="padding-large overflow-hidden no-padding-top">
    <div class="container">
        <div class="row">
            <div class="display-header text-uppercase text-dark text-center pb-3">
                <h2 class="display-7">Rekomendasi Buku</h2>
            </div>
            <div class="d-flex flex-wrap">
            @foreach ($rekom as $sari)
          <figure class="instagram-item pe-2">
            <a href="#" class="image-link position-relative">
              <img src="{{ asset('/storage/cover/'.$sari->cover) }}" alt="instagram" class="insta-image">
              
            </a>
            <div class="card-detail d-flex justify-content-start align-items-baseline pt-3">
              <h3 class="card-title text-Sentencase">
                <a  href="#">{{$sari->judul_buku}}</a>
              </h3>
            </div>
          </figure>
          @endforeach
          
        </div>
      </div>
    </div>
  </section>