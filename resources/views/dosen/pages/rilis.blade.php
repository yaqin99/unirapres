@foreach ($rilis as $data )
                
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="{{ asset('/storage/cover/'.$data->cover) }}" alt="product-item" class="img-fluid">
                  </div>
                  {{-- <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black">Lihat Buku<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div> --}}
                  <div class="card-detail d-flex justify-content-start align-items-baseline pt-3">
                    <h3 class="card-title text-Sentencase">
                      <a href="#">{{$data->judul_buku}}</a>
                    </h3>
                  </div>
                </div>
              </div>
              
              @endforeach