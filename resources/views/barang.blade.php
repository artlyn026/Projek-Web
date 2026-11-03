@extends('layouts.app')
@section('title', 'Data Barang')

@section('content')
<h3 class="mb-3">Data Barang</h3>
<table class="table table-bordered table-striped">
  <thead class="table-primary">
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Harga</th>
      <th>Stok</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>1</td><td>Laptop</td><td>Rp 10.000.000</td><td>5</td></tr>
    <tr><td>2</td><td>Mouse</td><td>Rp 150.000</td><td>30</td></tr>
  </tbody>
</table>
@endsection
