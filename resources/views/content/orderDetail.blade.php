@extends('layouts.app')

@section('content')

    <style>
        .pdfobject-container {
            width: 100%;
            max-width: 600px;
            height: 600px;
            margin: 2em 0;
        }

        .pdfobject {
            border: solid 1px #666;
        }

        #results {
            padding: 1rem;
        }

        .hidden {
            display: none;
        }

        .success {
            color: #4F8A10;
            background-color: #DFF2BF;
        }

        .fail {
            color: #D8000C;
            background-color: #FFBABA;
        }

    </style>

    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ asset('public/' . $products->img_path) }}" height="400">
            </div>
            <div class="col">
                <h1 class="text-white">{{ $products->name }}</h1>
                <h5 class="text-white">Author : {{ $products->author }}</h5>
                <h5 class="text-white">Price : Rp.{{ $products->price }}</h5>
                <p class="text-white">Sinopsis : {{ $products->sinopsis }}</p>
                <br>
                <h3 class="text-white"> E- PDF </h3>
                <p><a href="{{ asset('public/' . $products->pdf_path) }}" class="embed-link">Click this link to read
                        PDF</a></p>
                <div id="results" class="hidden"></div>
                <div id="pdf"></div>
                {{-- FEEDBACK --}}
                <h3 class="text-white">FEEDBACK</h3>
                <form action="{{ route('orderDetail') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="text-white mt-4">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="buyer_name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Nama">
                    </div>

                    <div class="text-white mt-4">
                        <label for="exampleInputEmail1">Feedback</label>
                        <input type="text" name="buyer_contact" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Feedback">
                    </div>

                    <input type="hidden" id="custId" name="prodID" value="{{ $products->id }}">
                    <div class="text-center mt-4">
                        <div>
                            <button type="submit" class="btn btn-success mr-4">Kirim</button>
                            <a class="btn btn-danger" href={{ route('home') }}>Back</a>
                        </div>
                    </div>
                </form>
                {{-- FEEDBACK --}}
            </div>
        </div>
    </div>
    <br><br><br>

@endsection
