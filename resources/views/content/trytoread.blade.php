@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-2">
            <h3>Try to Write</h3>
        </div>
        <div class="col-12 bg-white card-body">
            <h4>Wanna be reader ?</h4>
            <a href={{ route('home') }}>Just Click Here !</a>
        </div>
    </div>
</div>
@endsection