<div class="top-products-area py-3">
    <div class="container">
      <div class="section-heading d-flex align-items-center justify-content-between">
        <h6>Blog List</h6>
        <!-- Layout Options-->
        {{-- <div class="layout-options"><a href="blog-grid.html"><i class="lni lni-grid-alt"></i></a><a class="active" href="blog-list.html"><i class="lni lni-radio-button"></i></a></div> --}}
      </div>
      <div class="row g-3">
        <!-- Single Blog Card-->
        @foreach ($blog as $item)
        <div class="col-12 col-md-6">
          <div class="card blog-card list-card">
            <!-- Post Image-->
            <div class="post-img"><img src="{{ Storage::url($item->thumbnail) }}" alt=""></div>
            <!-- Read More Button--><a class="btn btn-danger btn-sm read-more-btn" href="{{ route('detail.edukasi', $item->id) }}">Baca Selengkapnya</a>
            <!-- Post Content-->
            <div class="post-content">
              <div class="bg-shapes">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <div class="circle4"></div>
              </div>
              <!-- Post Title--><a class="post-title d-block" href="{{ route('detail.edukasi', $item->id) }}">{{ $item->nama }}</a>
              <!-- Post Meta-->
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
