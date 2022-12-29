@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="text-center fw-bold mt-5">Pesanan Saya</h2>
    <div class="custom-separator mx-auto my-3 mb-4 bg-brown"></div>


    <div class="row">
    @foreach ($products as $data)
    <div class="col-sm-4">
        <div class="bg-light shadow-sm pt-4 px-4 my-5">
            <ul style="list-style: none; padding:0;">
                <li><Strong>ID Pesanan : PD{{$data->id}}</Strong></li>
                <li><b>Nama :</b> {{$data->nama_product}}</li>
                <li><b>Size :</b> {{ $data->size->nama_ukuran }}</li>
                <li><b>Warna :</b> {{ $data->color->nama_warna }}</li>
                <li><b>Jumlah :</b> {{$data->quantity}}</li>
                <li><b>Status Orderan :</b> {{ $data->status->nama_status }}</li>
                <li><b>Status pembayaran :</b> {{$data->pembayaran->nama_pembayaran}}</li>
                <li><b>Total harga :</b> Rp.
                {{number_format($data->total_cost)}}</li>

                <div class="d-flex justify-content-end mt-3 pb-3">
                    <a href="" class="btn btn-danger mx-2">Complaint</a>
                    <a href="" class="btn btn-primary">Selesai</a>
                </div>
            </ul>
        </div>
    </div>
    @endforeach

    @foreach ($orders as $data)
    <div class="col-sm-4">
        <div class="bg-light shadow-sm pt-4 px-4 my-5">
            <ul style="list-style: none; padding:0;">
                <li><Strong>ID Pesanan : CB{{$data->id}}</Strong></li>
                <li><b>Nama :</b> {{$data->customer->nama}}</li>
                <li><b>Tanggal Order :</b> {{ $data->create_at }}</li>
                <li><b>Size :</b> {{ $data->size->nama_ukuran }}</li>
                <li><b>Warna :</b> {{ $data->color->nama_warna }}</li>
                <li><b>Jumlah :</b> {{$data->quantity}}</li>
                <li><b>Status Orderan :</b> {{ $data->status->nama_status }}</li>
                <li><b>Status pembayaran :</b> {{$data->pembayaran->nama_pembayaran}}</li>
                <li><b>Total harga :</b> Rp.
                {{number_format($data->material->harga * $data->quantity)}}</li>

                <div class="d-flex justify-content-end mt-3 pb-3">
                    <a href="" class="btn btn-danger mx-2">Complaint</a>
                    <a href="" class="btn btn-primary">Selesai</a>
                </div>
            </ul>
        </div>
    </div>
    @endforeach

    </div>
</div>

@endsection