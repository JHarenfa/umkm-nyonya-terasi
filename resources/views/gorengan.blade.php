@extends('layout/menu')


@section('content')
<div class="banner">
  <img src="images/banner-gorengan.png" class="banner-img">
</div>
        <!-- Catalog -->
        <!-- Menu Gorengan -->
        <div class="catalog">
          <h1>Menu Gorengan</h1>
          <div class="swiper mySwiper">
            <div class="swiper-wrapper catalog-item">
              @foreach ($products as $product)
              @if ($product->productType == "Gorengan")
              <div class="swiper-slide catalog-item">
                <div class="card-catalog">
                  <img src="{{ $product->image }}" alt="{{ $product->name }}">
                  <div class="card-container">
                    <h4><b>{{ $product->name }}</b></h4>
                    <p>{{ $product->detail }}</p>
                  </div>
                </div>
              </div>
              @endif
                @endforeach
            </div>
          </div>
        </div>
      
@endsection