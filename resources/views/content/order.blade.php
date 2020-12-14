@extends('layouts.app')

@section('content')
    @if (count($products) === 0)
    <div class="d-flex justify-content-center">
        <p class="text-muted"> Sedang Maintanance !</p>
    </div>
    @elseif (count($products) > 0)

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            @foreach ($products as $index => $product)
                            <div class="col-sm-6">
                                <div class="card border-0" style="width: 18rem;">
                                    <img src="{{ asset('public/'.$product->img_path) }}" height="225">
                                    <div class="card-body">
                                        <h3 class="card-title"><b>{{ $product->name }}</b></h3>
                                        <p class="card-text">Sinopsis : </p>
                                        <p class="card-text">{{ $product->sinopsis }}</p>
                                        <div class="text-center"><a href="{{ route('content.orderDetail',$product->id) }}" class="btn bg-success text-white text-center">Read Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endsection
