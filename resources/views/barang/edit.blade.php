@extends('layout.app')
@section('contents')
<br>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Barang
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('barang.update', $bar->id_barang) }}" id="myForm"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- <div class="form-group">
                        <label for="id_program">Id</label>
                        <input type="text" name="id_program" class="form-control" id="id_program"
                            value="{{ $pro->id_program }}" aria-describedby="id_program">
                    </div> --}}
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="username" name="kode_barang" class="form-control" value="{{ $bar->kode_barang }}"
                            id="kode_barang" aria-describedby="kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="name" name="nama_barang" class="form-control" id="nama_barang"
                            value="{{ $bar->nama_barang }}" aria-describedby="nama_barang">
                    </div>
                    <div class="form-group"> 
                        <label for="kategori_barang">Kategori barang</label> 
                        <input type="name" name="kategori_barang" class="form-control" value="{{ $bar->kategori_barang }}" id="kategori_barang" aria-describedby="kategori_barang" > 
                    </div>
                    <div class="form-group"> 
                        <label for="harga">Harga</label> 
                        <input type="number" name="harga" class="form-control" value="{{ $bar->harga }}" class="form-control" id="harga" aria-describedby="harga" > 
                    </div>
                    <div class="form-group"> 
                        <label for="qty">Qty</label> 
                        <input type="number" name="qty" class="form-control" class="form-control" value="{{ $bar->qty }}" id="qty" aria-describedby="qty" > 
                    </div>
                    <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-success " href="{{ route('barang.index') }}">Kembali</a> 
                </form>
            </div>
        </div>
    </div>
</div>
@endsection