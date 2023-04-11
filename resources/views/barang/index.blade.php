@extends('layout.app')
@section('title', 'Home')

{{-- @section('about', 'active') --}}
<!DOCTYPE html>
@section('contents')

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="float-right my-2">
                        <a class="btn btn-success" href="{{ route('barang.create') }}"> Add barang</a>
                    </div>
                </div>
                <div class="col">
                    <form class="container">
                        <input class="form-control mt-1" type="text" placeholder="Cari berdasarkan nama.." name="search"
                            aria-label="Search" style="border-radius: 20px; width:300px">
                        <button class="btn btn-outline-success mt-1" type="submit"
                            style="border-radius: 20px;">Search</button>
                    </form>
                </div>
            </div>


            <div class="judul">Home</div>
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori barang</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($bar as $bar)
                    <tr>
                        <td>{{ $bar->id_barang }}</td>
                        <td>{{ $bar->kode_barang }}</td>
                        <td>{{ $bar->nama_barang }}</td>
                        <td>{{ $bar->kategori_barang }}</td>
                        <td>{{ $bar->harga }}</td>
                        <td>{{ $bar->qty }}</td>
                        <td>
                            <form action="{{ route('barang.destroy', $bar->id_barang) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('barang.show', $bar->id_barang) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('barang.edit', $bar->id_barang) }}">Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        </div>
    </body>
@endsection

</html>
