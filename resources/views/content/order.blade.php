<style>
    /* img {
        width: 200px; */
        /* You can set the dimensions to whatever you want */
        /* height: 200px; */
        /* object-fit: fill; */

    /* } */

</style>

@extends('layouts.app')

@section('content')
    @if (count($products) === 0)
        <div class="d-flex justify-content-center">
            <p class="text-white"> Sedang Maintanance !</p>
        </div>
    @elseif (count($products) > 0)

        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card border-2">
                        <div class="card-body">
                            <div class="row d-flex flex-wrap"> 
                                @foreach ($products as $index => $product)
                                    <div class="col-4">
                                        <div class="card border-0 mb-4 mt-4 mx-auto" style="width: 18rem;">
                                            <img class="card-img-top" src="{{ asset('public/' . $product->img_path) }}" height="225">
                                            <h3 class="card-title text-center mt-4"><b>{{ $product->name }}</b></h3>
                                            <p class="card-text">Sinopsis : </p>
                                            <p class="card-text">
                                                {{ Illuminate\Support\Str::limit($product->sinopsis, 200) }}
                                            </p>
                                            <div class="text-center"><a
                                                    href="{{ route('content.orderDetail', $product->id) }}"
                                                    class="btn bg-success text-white text-center">Read Now</a>
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
