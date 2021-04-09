@extends('layouts.app')

@section('content')
    <div class="container">
        <section>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <img class="card-img-top" src="{{ $product->image }}">
                            <div class="card-body" style="height: 230px;">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="card-text">card title and make up the bulk of the card's content.</p>
                                <p>$ {{ $product->price }}</p>
                                <a href="{{ route('addToCart', $product->id) }}" class="btn btn-primary"> Buy</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
