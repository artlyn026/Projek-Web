@extends('layouts.app')
@section('title', 'Data Transaksi')

@section('content')
<h3 class="mb-3">Data Transaksi</h3>
<table class="table table-bordered table-striped">
  <thead class="table-primary">
    <tr>
      <th>No</th>
      <th>Nama Pembeli</th>
      <th>Barang</th>
      <th>Jumlah</th>
      <th>Total Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>1</td><td>Budi</td><td>Laptop</td><td>1</td><td>Rp 10.000.000</td></tr>
    <tr><td>2</td><td>Sinta</td><td>Mouse</td><td>2</td><td>Rp 300.000</td></tr>
  </tbody>
</table>
@endsection
