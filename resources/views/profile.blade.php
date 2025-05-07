@extends('layouts.app')
@section('header')
    <div class="header-image text-center">
        <img src="{{ asset('images/logo.png') }}" alt="Lehuula Farms" class="img-fluid" width="300px" height="300px">
    </div>
@endsection
@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="profile-card text-center">
        <img src="" alt="">
        <h5 class="fw-bold mb-1">{{ $username }}</h5>
<br>
        @php
            $fields = [
                'Nama' => $name,
                'Email' => $email,
                "favorite" => $favorite,
            ];
        @endphp
        <form>
            @foreach($fields as $label => $value)
                <div class="mb-3" text-start>
                    <label class="form-label fw-semibold">{{ $label }}</label>
                    <input type="text" class="form-control" value="{{ $value }}" readonly>
                </div>
            @endforeach

        </form>

    </div>
</div>
@endsection
