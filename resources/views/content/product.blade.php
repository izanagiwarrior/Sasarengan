@extends('layouts.app')

@section('content')
    @if (count($products) === 0)
        <div class="d-flex justify-content-center">
            <p class="text-muted">Belum ada product yang terdaftar silahkan tambahkan ! </p>
        </div>
        <div class="d-flex justify-content-center">
            <a href="orderEvent" class="btn btn-primary">Tambah Produk</a>
        </div>

    @elseif (count($products) > 0)

        {{ $i = 0 }}
        <h1 class="text-center">List Produk</h1>
        <div class="container d-flex">
            <a href="orderEvent" class="btn btn-primary">Tambah Produk</a>
        </div>
        <br>
        <div class="container d-flex justify-content-center">
            <table class="table table-striped">
                <tr class="bg-dark text-white">
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        Action</th>
                </tr>

                @foreach ($products as $index => $product)

                    <tr>
                        <td>{{ $i += 1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <div class="btn-group">
                                <button href="{{ route('content.updateEvent', $product->id) }}"
                                    class="btn btn-primary">Edit</button>
                                &nbsp;&nbsp;&nbsp;
                                <form action="{{ route('content.deleteEvent') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

    @endif
@endsection
