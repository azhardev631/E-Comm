@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img style="height: 300px" src="{{ $detail['gallary'] }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>Name: {{ $detail['name'] }}</h2>
                <h3>Price: {{ $detail['price'] }}</h3>
                <h4>Category: {{ $detail['category'] }}</h4>
                <h4>Description: {{ $detail['description'] }}</h4>
                <br><br>
                 <form action="/add_to_cart" method="POST">
                    <input type="hidden" name="product_id" value="{{ $detail['id'] }}">
                    @csrf
                    <button class="btn btn-success">Add to Cart</button>
                 </form>
                <br><br>
                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
@endsection


