@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-2" data-aos="fade-out">
            <h1 class="text-center text-white">Try to Write</h1>
        </div>
        <div class="col-12 bg-white card-body"  data-aos="fade-out">
            <h4>How to Publish your Stories or Books</h4>
            <p> Just be an Admin ! and we will give you access to do that ! </p>
            <a href={{ route('product') }}>BE ADMIN</a>
        </div>
    </div>
</div>
@endsection