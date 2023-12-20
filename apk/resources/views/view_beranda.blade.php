@extends('layouts.dasar')

@section('title','beranda')



@section('content')
<!-- <h2>selamat datang @section('judul','beranda')</h2> -->
<style>
    .transaksi-box {
      color: white;
      padding: 20px;
      margin: 10px;
      text-align: center;
      border-radius: 8px;
    }

    .pemasukan-box {
      background-color: #28a745; /* Warna Hijau untuk Pemasukan */
    }

    .pengeluaran-box {
      background-color: #dc3545; /* Warna Merah untuk Pengeluaran */
    }

    .bersih-box {
      background-color: #007bff; /* Warna Biru untuk Pengeluaran Bersih */
    }
  </style>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="transaksi-box pemasukan-box">
        <h3>Pemasukan</h3>
        <p>Rp. {{ number_format(rand(1000, 5000)) }}</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="transaksi-box pengeluaran-box">
        <h3>Pengeluaran</h3>
        <p>Rp. {{ number_format(rand(500, 2000)) }}</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="transaksi-box bersih-box">
        <h3>Pengeluaran Bersih</h3>
        <p>Rp. {{ number_format(rand(500, 3000)) }}</p>
      </div>
    </div>
  </div>
</div>
    <!-- Your page-specific content goes here -->
@endsection

 