@extends('layouts.parent')

@section('title', 'Cart')

@section('main', 'Cart')

<style>
    @media print {
        body * {
            visibility: hidden;
        }

        .container-content,
        .container-content * {
            visibility: visible;
        }

        .container-content {
            position: absolute;
            top: 0;
            left: 0;
        }
    }
</style>

@section('content')
    <section class="container">
        <div class="container-header d-flex justify-content-between">
            <h1>Detail Pesanan</h1>
        </div>
        <div class="container-content">
            <div class="card mt-4" style="width: 30rem;">
                <div class="card-header">
                    <h4>Struk Pesanan</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <table class="table table-xl">
                            <tbody>
                                @foreach (session('cart') as $id => $details)
                                    <tr>
                                        <td>Nama Barang</td>
                                        <td>{{ $details['name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pemesan</td>
                                        <td>{{ session('nama_pembeli') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Quantity</td>
                                        <td>{{ $details['quantity'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>Rp{{ number_format((float) $details['price'], 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>{{ date('d-m-Y H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Harga</td>
                                        <td>Rp{{ number_format((float) $details['price'] * $details['quantity'], 0, ',', '.') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </li>
                </ul>
            </div>

            <div class="print-btn-container">
                <button type="button" class="btn btn-primary" onclick="window.print()">Cetak</button>
                <a href="{{ route('cart') }}" class="btn btn-danger ml-1">Kembali</a>
            </div>

            <p class="fw-bold">!!! Silahkan cetak struk pesanan </p>
        </div>
    </section>
@endsection
