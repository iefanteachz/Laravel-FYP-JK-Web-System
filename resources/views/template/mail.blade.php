<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @php
        $total = 0;
    @endphp

    <div class="container">
        <h1>Anda Telah Melakukan Pemesanan</h1>
        <table class="table">
            <thead>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Qty</th>
                <th>Subtotal</th>
            </thead>

            <tbody>
                @foreach ($carts as $cart)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $cart->service->name }}</td>
                        <td>{{ number_format($cart->service->price) }}</td>
                        <td>{{ $cart->qty }}</td>
                        <td>RM {{ number_format($cart->service->price) }}</td>
                    </tr>

                    @php
                        $total += ($cart->service->price)
                    @endphp

                @endforeach
            </tbody>
        </table>
        <h1>Total Price: RM {{ number_format($cart->service->price) }}</h1>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
