<div class="container">
    <div class="pt-3">
      <!-- Hero Slides-->
      <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide-->
        @foreach ($slider as $item)
            <div class="single-hero-slide" style="background-image: url('{{ Storage::url($item->photo) }}')">
            <div class="slide-content h-100 d-flex align-items-center">
                <div class="slide-text">
                <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">{{ $item->judul }}</h4>
                <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">{{ $item->deskripsi }}</p><a class="btn btn-primary btn-sm" href="{{ $item->link }}" data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">{{ $item->tombol }}</a>
                </div>
            </div>
            </div>
        @endforeach
      </div>
    </div>
  </div>
