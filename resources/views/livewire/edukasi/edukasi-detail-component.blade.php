<div class="product-slide-wrapper">
    <!-- Product Slides-->
    <div class="single-product-slide" style="background-image: url('{{ Storage::url($blogDetail->thumbnail) }}')"></div>

    <!-- Video Button-->
    <a class="video-btn shadow-sm" id="singleProductVideoBtn" href="{{ $blogDetail->video }}">
      <svg class="bi bi-play text-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
        <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"></path>
      </svg>
    </a>
  </div>
  <div class="product-description pb-3">
    <!-- Product Title & Meta Data-->
    <div class="product-title-meta-data bg-white mb-3 py-3">
      <div class="container d-flex justify-content-between">
        <div class="p-title-price">
          <h6 class="mb-1">{{ $blogDetail->nama }}</h6>
        </div>
      </div>
    </div>

    <!-- Product Specification-->
    <div class="p-specification bg-white mb-3 py-3">
      <div class="container">
        <h6>Deskripsi</h6>
        <p>
            {{ $blogDetail->deskripsi }}
        </p>
      </div>
    </div>

    <div class="pb-3"></div>
    <!-- Related Products Slides-->
    <div class="related-product-wrapper py-3 mb-3">
      <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between">
          <h6>Edukasi Lainya</h6><a class="btn" href="shop-grid.html">View All</a>
        </div>
        <div class="related-product-slide owl-carousel">
          <!-- Single Product Slide -->
          @foreach ($blog as $item)
          <div class="single-related-product-slide">
            <div class="card product-card">
              <div class="card-body">
                <!-- Thumbnail --><a class="product-thumbnail d-block" href="{{ route('detail.edukasi', $item->id) }}"><img class="mb-2" src="{{ Storage::url($item->thumbnail) }}" alt=""></a>
                <!-- Product Title --><a class="product-title d-block" href="single-product.html">{{ $item->nama }}</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
