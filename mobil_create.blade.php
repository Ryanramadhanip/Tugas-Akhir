@extends('template')
@section('content')
<section class="main-section">
    <div class="content">
        <h1>Tambah Data Mobil</h1>
        <hr>
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li><strong>{{ $error }}</strong></li>
            @endforeach
        </div>
        @endif

        <form action="{{ route('mobil.store') }}" method="post"">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id">ID : </label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="form-group">
            <label for="kd_mobil">KODE MOBIL : </label>
            <input type="text" class="form-control" id="kd_mobil" name="kd_mobil">
        </div>
        <div class="form-group">
            <label for="nama_mobil">NAMA MOBIL : </label>
            <input type="text" class="form-control" id="nama_mobil" name="nama_mobil">
        </div>
        <div class="form-group">
            <label for="stok">STOK : </label>
            <input type="text" class="form-control" id="stok" name="stok">
        </div>
        <div class="form-group">
            <label for="harga">HARGA : </label>
            <input type="text" class="form-control" id="harga" name="harga">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
        </form>
    </div>
</section>
@endsection