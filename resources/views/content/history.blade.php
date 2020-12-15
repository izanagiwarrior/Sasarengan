@extends('layouts.app')

@section('content')

    @if (count($orders) === 0)

    <div class="d-flex justify-content-center">
        <p class="text-muted"> Sedang Maintanance !</p>
    </div>

    @elseif (count($orders) > 0)

        
        <h1 class="text-center">History</h1>
        <br><br>
        <div class="container d-flex justify-content-center text-center">
            <table class="table table-striped">
                <tr class="bg-dark text-white">
                    <th>#</th>
                    <th>Product</th>
                    <th>Buyer Name</th>
                    <th>Contact</th>
                </tr>
                @foreach ($orders as $index => $order)
                    <tr>
                        <td>{{ $i += 1 }}</td>

                        @foreach ($products as $ps)
                            @if ($ps->id === $order->product_id)

                                <td>{{ $ps->name }}</td>
                            @endif

                        @endforeach

                        <td>{{ $order->buyer_name }}</td>
                        <td>{{ $order->buyer_contact }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif
@endsection
