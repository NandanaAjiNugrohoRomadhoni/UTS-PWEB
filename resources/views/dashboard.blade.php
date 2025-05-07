@extends('layouts.app')
@section('header')
    <div class="header-image text-center">
        <img src="{{ asset('images/logo.png') }}" alt="Lehuula Farms" class="img-fluid" width="300px" height="300px">
    </div>
@endsection
@section('content')
<br>
<br>
    <h1 class="dflex w-100 mb-5 text-center">Selamat datang, {{ $username }}!</h1>

    <div class="d-flex align-items-start justify-content-center">


        <div class="d-flex flex-column align-items-start w-100">
            <h2>Setiap Cangkir, Sebuah Cerita Cinta</h2>
            <p class="sm w-50 p-3">Di antara aroma kopi dan senyap pagi, ada rindu yang larut perlahan.
                Seperti kisah lama yang tak pernah usang, setiap tegukan di sini menyimpan hangatnya kenangan dan getir yang
                manis—seperti cinta pertama.
                Mari duduk sejenak.
                Biarkan kopi bicara, dan hati mengingat.</p>
            <button type="button" class="btn btn-outline-info" onclick="window.location.href='/pengelolaan?username={{request('username')}}'" >Lihat Menu</button>

            <br>
        </div>
        <div class="align-self-end">
            <img src="{{ asset('images/logo.png') }}" alt="Lehuula Farms" class="img-fluid">
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <div class="d-flex align-items-start justify-content-center">
        <div class="me-12">
            <img src="{{ asset('images/logo.png') }}" alt="Lehuula Farms" class="img-fluid">
        </div>

        <div class="d-flex flex-column align-items-end w-100">
            <h2 class="text-end w-50">KoMi – Rasa yang Menemani, Bukan Sekadar Janji </h2>
            <p class="text-end sm w-50">
                Pernahkah kamu jatuh cinta pada sesuatu yang sederhana?
                Seperti percakapan di sore mendung, atau senyuman tanpa alasan. KoMi hadir seperti itu—diam-diam mengisi
                ruang, tanpa memaksa.

                Setiap gelasnya bukan hanya rasa, tapi perjalanan.
                Dari keheningan pagi hingga senja yang enggan pulang, KoMi menemani seperti seseorang yang tak pernah lelah
                memahami.

                Karena kopi terbaik adalah yang tahu cara tinggal.
                Dan KoMi, selalu ada.</p>
            <br>
        </div>
    </div>
@endsection
