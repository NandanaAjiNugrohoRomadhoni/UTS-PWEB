@extends('layouts.app')
@section('header')
    <div class="header-image text-center">
        <img src="{{ asset('images/logo.png') }}" alt="Lehuula Farms" class="img-fluid" width="300px" height="300px">
    </div>
@endsection

@section('content')
<br>
<br>
    <h1 class="text-center">Pengelolaan Produk</h1>
<br>
<br>
    <div class="row row-cols-1 row-cols-md-4 g-2">
       @foreach ($items as $item)
       <div class="col">
            <div class="card h-100">
                <img src="{{ asset($item['gambar']) }}" class="card-img-top" alt="{{ $item['nama'] }}" height="300px" width="auto">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['nama'] }}</h5>
                    <p class="card-text"> {{ $item['deskripsi'] }}</p>
                </div>
       </div>
        </div>
       @endforeach
    </div>
    <br>
@endsection
