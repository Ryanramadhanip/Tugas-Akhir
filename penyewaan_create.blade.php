@extends('template')
@section('content')
<section class="main-section">
    <div class="content">
        <h1>Tambah Data Penyewaan</h1>
        <hr>
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li><strong>{{ $error }}</strong></li>
            @endforeach
        </div>
        @endif

        <form action="{{ route('penyewaan.store') }}" method="post"">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id">ID : </label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="form-group">
            <label for="kd_mobil">KODE MOBIL : </label>
            <select name="kd_mobil" class="form-control">
                @foreach($data as $datas)
                <option value="{{ $datas->kd_mobil }}">{{ $datas->kd_mobil }} || 
                {{ $datas->nama_mobil }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jumlah">JUMLAH : </label>
            <input type="text" class="form-control" id="jumlah" name="jumlah">
        </div>
        <div class="form-group">
            <label for="total_harga">TOTAL HARGA : </label>
            <input type="text" class="form-control" id="total_harga" name="total_harga">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
        </form>
    </div>
</section>
@endsection