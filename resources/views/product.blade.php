@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
    <h2 class="text-center mt-5 fw-bold">Product</h2>
    <div class="custom-separator my-3 mb-5 mx-auto bg-brown"></div>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 d-flex justify-content-center align-content-center ">
            @foreach ($products as $data)
            <div class="col d-flex justify-content-center align-content-center">
                <div class="card" style="width: 16rem;" data-aos="zoom-out" data-aos-delay="300">
                    <img src="products/{{ $data->gambar }}" class="card-img-top w-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->nama_product }}</h5>
                        <p class="card-text">{{ $data->deskripsi }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fw-bold">Rp {{number_format($data->harga)}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('show', $data->id) }}" class="card-link">View detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
@endsection
