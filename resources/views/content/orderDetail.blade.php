@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ asset('public/' . $products->img_path) }}" height="400">
            </div>
            <div class="col">
                <h1>{{ $products->name }}</h1>
                <h6>Author : {{ $products->author }}</h6>
                <h1>Price : Rp.{{ $products->price }}</h1>
                <p>Sinopsi :{{ $products->sinopsis }}</p>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="form-group">
        <p> Bab 1 </p>
        <p> {{ $products->description }}
    </div>

    <h1 class="text-center">Pemesanan</h1>
    <form action="{{ route('orderDetail') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" name="buyer_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nama">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Kontak</label>
            <input type="text" name="buyer_contact" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Kontak">
        </div>

        <input type="hidden" id="custId" name="prodID" value="{{ $products->id }}">
        <div class="text-center">
            <div class="form-group">
                <button type="submit" class="btn btn-success">Pesan</button>
                <a class="btn btn-danger" href={{ route('home') }}>Back</a>
            </div>
        </div>
    </form>
@endsection
