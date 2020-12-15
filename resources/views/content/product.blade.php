<style>
.button-size {
    width: 100px;
    height: 45px;
}
</style>

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

        <h1 class="text-center">List Produk</h1>
        <div class="container d-flex">
            <a href="orderEvent" class="btn btn-primary">Tambah Produk</a>
        </div>
        <br>
        <div class="container d-flex justify-content-center">
            <table class="table table-striped">
                <tr class="bg-dark text-white text-center">
                    <th>#</th>
                    <th >Name</th>
                    <th class="w-25">Price</th>
                    <th class="w-25">Action</th>
                </tr>

                @foreach ($products as $index => $product)

                    <tr class="text-center">
                        <td class="align-middle">{{ $i += 1 }}</td>
                        <td class="align-middle">{{ $product->name }}</td>
                        <td class="align-middle">Rp. {{ $product->price }}</td>
                        <td class="align-middle">
                            <div class="btn-group">
                                <button href="{{ route('content.updateEvent', $product->id) }}" class="btn btn-primary mr-4 button-size py-0 mt-3">Edit</button>

                                <form action="{{ route('content.deleteEvent') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">

                                    <button class="btn btn-danger button-size  mt-3">Hapus</button>

                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

    @endif
@endsection
