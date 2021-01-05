@extends('layouts.adminapp')

@section('content')
    <h1 class="text-center">Update Product</h1>
    <form action="{{ route('updateEvent',$products->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input type="text" value="{{ $products->name }}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Author</label>
            <input type="text" value="{{ $products->stock }}" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <div class="input-group-prepend">
                <span class="input-group-text">Rp. </span>
                <input type="text" value="{{ $products->price }}" name="price" class="form-control" id="exampleInputPassword1">
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Sinopsis</label>
            <textarea type="text" class="form-control" name="sinopsis" id="exampleFormControlTextarea1" rows="3">{{ $products->description }}</textarea>
        </div>
{{-- 
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Bab 1</label>
            <textarea type="text" class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $products->description }}</textarea>
        </div> --}}


        <div class="form-group">
            <label for="exampleFormControlFile1">Cover</label>
            <input type="file" value="{{ $products->img_path }}" name="img_path" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">E-PDF</label>
            <input type="file" value="{{ $products->pdf_path }}" name="pdf_path" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('product') }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>


@endsection
