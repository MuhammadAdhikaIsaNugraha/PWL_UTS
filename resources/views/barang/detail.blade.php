@extends('layout.app')
@section('title','Detail Barang')
<!DOCTYPE html>
<html>
@section('contents') 
<br><br>
<div class="container"> 
    <div class="row justify-content-center align-items-center"> 
        <div class="card" style="width: 24rem;"> 
            <div class="card-header"> 
            <center>Detail Barang</center> 
            </div>
            <div class="card-body"> 
                <ul class="list-group list-group-flush"> 
                    <li class="list-group-item"><b>Id: </b>{{$bar->id_barang}}</li> 
                    <li class="list-group-item"><b>Kode Barang: </b>{{$bar->kode_barang}}</li> 
                    <li class="list-group-item"><b>Nama Barang: </b>{{$bar->nama_barang}}</li> 
                    <li class="list-group-item"><b>Kategori barang: </b>{{$bar->kategori_barang}}</li>
                    <li class="list-group-item"><b>Harga: </b>{{$bar->harga}}</li>
                    <li class="list-group-item"><b>Qty: </b>{{$bar->qty}}</li>
                </ul> 
            </div> 
            <a class="btn btn-success mt-3" href="{{ route('barang.index') }}">Kembali</a> 
        </div> 
    </div> 
</div> 
@endsection
</html>