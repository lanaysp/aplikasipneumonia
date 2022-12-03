@include('layouts.hero')
<!-- Product Catagories -->
<div class="product-catagories-wrapper py-3">
    <div class="container">
        <div class="section-heading">
            <h6>Menu</h6>
        </div>
        <div class="product-catagory-wrap">
            <div class="row g-3">
                <!-- Single Catagory Card -->
                <div class="col-4">
                    <div class="card catagory-card">
                        <div class="card-body">
                            <a class="text-danger" href="{{ url('') }}">
                                <img src="{{ url('assets/img/icons/webinar.png') }}" class="w-50 mb-2" alt="">
                                <span>Edukasi</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card catagory-card">
                        <div class="card-body">
                            <a class="text-danger" href="{{ url('') }}">
                                <img src="{{ url('assets/img/icons/webinar.png') }}" class="w-50 mb-2" alt="">
                                <span>Skrining Pneumonia</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Flash Sale Slide -->
 <div class="flash-sale-wrapper py-3">
    <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Edukasi</h6><a class="btn" href="#">Lihat Semua</a>
        </div>
      <!-- Flash Sale Slide-->
      <div class="flash-sale-slide owl-carousel">
        <!-- Single Flash Sale Card-->
        @foreach ($blog as $item)
        <div class="card flash-sale-card">
            <div class="card-body">
                <a href="{{ route('detail.edukasi', $item->id) }}">
                    <img src="{{ Storage::url($item->thumbnail) }}" alt="">
                    <span class="product-title">{{ $item->nama }}</span>
                </a>
            </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
 <!-- Cool Facts Area-->
 <div class="cta-area py-3">
    <div class="container">
      <div class="cta-text p-4 p-lg-5" style="background-image: url(assets/img/bg-img/24.jpg)">
        <h4 class="text-white">Waspadai Pneumonia</h4>
        <p class="text-white">Segera deteksi dengan <br>Klik tombol dibawah ini.</p>
        <a class="btn btn-warning" href="#">Deteksi Sekarang</a>
      </div>
    </div>
</div>
