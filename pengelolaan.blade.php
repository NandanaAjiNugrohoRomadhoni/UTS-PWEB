@extends('layouts.app')

@section('content')
<h2>Pengelolaan Produk</h2>
<table class="table">
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item['nama'] }}</td>
            <td>{{ $item['stok'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
