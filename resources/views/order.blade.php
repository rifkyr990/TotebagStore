@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <h2 class="text-center fw-bold pt-5">Data Orderan</h2>
    <div class="custom-separator my-3 mb-5 mx-auto bg-brown"></div>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <td scope="col">No</td>
                <td scope="col">Nama</td>
                <td scope="col"width="150">alamat</td>
                <td scope="col" width="400">Design totebag</td>
                <td scope="col">Jenis Material</td>
                <td scope="col" width="150">size</td>
                <td scope="col">Total bayar</td>
                <td scope="col" width="300">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr class="text-center">
                <td>{{$loop->iteration}}</td>
                <td>{{$order->customer->nama}}</td>
                <td>{{$order->customer->alamat}}</td>
                <td><img src="file/{{ $order->design }}" class="img-fluid rounded-start w-50"></td>
                <td>{{$order->material->nama_material}}</td>
                <td>{{$order->size->nama_ukuran}}</td>
                <td>{{number_format($order->material->harga * $order->quantity)}}</td>
                <td>
                    <form action="{{ route('destroy', $order->id) }}" method="post">
                        <a href="{{ route('show', $order->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('edit', $order->id) }}" class="btn btn-primary">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection