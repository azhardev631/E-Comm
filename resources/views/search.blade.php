@extends('master')
@section('content')
    <div class="trending-wrapper">
        <div>
            @foreach ($data as $product)
            <div class="trending-item">
                <a href="detail/{{ $product['id'] }}">
                    <div class="col-sm-4">
                        <img src="{{ $product['gallary'] }}" class="d-block w-100 trending-img" >
                    <h5>{{ $product['name'] }}</h5>
                    <h4>{{ $product['description'] }}</h4>
                    </div>
                </a>
            </div>
            @endforeach
          </div>
    </div>
@endsection


