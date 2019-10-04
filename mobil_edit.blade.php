@extends('template')
@section('content')
<section class="mais-section">
    <div class="content">
        <h1>Ubah Mobil</h1>
        <hr>
        @if($errors->any)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error) 
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @foreach($data as $datas)
        <form action="{{ route('mobil.update', $datas->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="id">ID : </label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $datas->id }}">
            </div>
            <div class="form-group">
                <label for="kd_mobil">KODE MOBIL : </label>
                <input type="text" class="form-control" id="kd_mobil" name="kd_mobil" value="{{ $datas->kd_mobil }}">
            </div>
            <div class="form-group">
                <label for="nama_mobil">NAMA MOBIL : </label>
                <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="{{ $datas->nama_mobil }}">
            </div>
            <div class="form-group">
                <label for="stok">STOK : </label>
                <input type="text" class="form-control" id="stok" name="stok" value="{{ $datas->stok }}">
            </div>
            <div class="form-group">
                <label for="harga">HARGA : </label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $datas->harga }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            </div>
        </form>
        @endforeach
    </div>
</section>
@endsection