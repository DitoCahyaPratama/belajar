@extends('template.app')

@section('content')
<form action={{ route('product.store') }} method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nama produk</label>
      <input type="text" class="form-control" name="name" placeholder="Nama">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Stok produk</label>
      <input type="number" class="form-control" name="stock" placeholder="Stock">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection