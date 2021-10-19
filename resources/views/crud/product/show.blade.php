@extends('template.app')

@section('content')
    <div class="form-group">
      <label for="exampleInputEmail1">Nama produk</label>
      <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $data['product']->name }}" readonly>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Stok produk</label>
      <input type="number" class="form-control" name="stock" placeholder="Stock" value="{{ $data['product']->stock }}" readonly>
    </div>
    <a href="{{ route('product.index') }}" class="btn btn-warning">Kembali</a>
@endsection