@extends('layout.menu')


@section('content')
    <div class="banner">
        <img src="images/banner-berat.png" class="banner-img">
    </div>
    <div class="catalog">
        <h1>Menu Makanan Berat</h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper catalog-item">
                @foreach ($products as $product)
                    @if ($product->productType == 'Makanan Berat')
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
