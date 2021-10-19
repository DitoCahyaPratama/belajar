@extends('template.app')

@section('content')
    @if ($message = Session::get('warning'))
        <div class="alert alert-custom alert-light-warning fade show" role="alert">
            <div class="alert-icon"><i class="flaticon2-warning"></i></div>
            <div class="alert-text">{{$message}}</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-custom alert-light-success fade show" role="alert">
            <div class="alert-icon"><i class="flaticon2-warning"></i></div>
            <div class="alert-text">{{ $message }}</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>
    @endif

<a class="btn btn-lg btn-primary my-4" href={{ route('product.create') }}>Tambah</a>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Stock</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @if(count($data['product']) > 0)
                @foreach ($data['product'] as $dt)
                    <tr>
                        <td>{{ $dt->id }}</td>
                        <td>{{ $dt->name }}</td>
                        <td>{{ $dt->stock }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href={{ route('product.show', $dt->id) }}>Show</a>
                            <a class="btn btn-sm btn-warning" href={{ route('product.edit', $dt->id) }}>Edit</a>
                            <form action={{ route('product.destroy', $dt->id) }} method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
              @else
                <tr>
                    <td colspan="4">Data belum ada</td>
                </tr>
              @endif
            
          </tbody>
    </table>
  </div>
@endsection