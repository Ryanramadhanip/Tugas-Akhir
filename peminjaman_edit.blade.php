@extends('template')
@section('content')
<section class="mais-section">
    <div class="content">
        <h1>Ubah Peminjaman</h1>
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
        <form action="{{ route('peminjaman.update', $datas->id) }}" method="post">
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
                <label for="jumlah">JUMLAH :</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $datas->jumlah }}">
            </div>
            <div class="form-group">
                <label for="total_harga">TOTAL HARGA :</label>
                <input type="text" class="form-control" id="total_harga" name="total_harga" value="{{ $datas->total_harga }}">
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