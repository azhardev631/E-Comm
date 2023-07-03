@extends('master')
@section('content')
    <div class="custom-product">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                  @foreach ($products as $product)
                    <div class="carousel-item {{ $product['id']==1?'active':'' }}" data-bs-interval="10000">
                        <a href="detail/{{ $product['id'] }}">
                            <img src="{{ $product['gallary'] }}" class="d-block w-100 slider-img" alt="...">
                        <div class="carousel-caption d-none d-md-block slider-text">
                          <h5>{{ $product['name'] }}</h5>
                          <p>{{ $product['description'] }}</p>
                        </div>
                        </a>
                      </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
    </div>
    <div class="trending-wrapper">
        <h1>Trending Products</h1>
        <div>
            @foreach ($products as $product)
            <div class="trending-item">
                <a href="detail/{{ $product['id'] }}">
                    <img src="{{ $product['gallary'] }}" class="d-block w-100 trending-img" >
                    <h5>{{ $product['name'] }}</h5>
                </a>
            </div>
            @endforeach
          </div>
    </div>
@endsection


