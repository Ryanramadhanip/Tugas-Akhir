@extends('template')
@section('content')
<section class="main-section">
    <div class="content">
        <h1 align="center"><font face="helvetica">DATA MOBIL</font></h1>
        @if(Session::has('alert_message'))
        <div class="alert alert-success">
            <strong>{{ Session::get('alert_message') }}</strong>
        </div>
        @endif
        <hr>
        &nbsp;
        <a href="{{ route('mobil.create') }}"><div class="btn btn-primary">
            Tambah Data Mobil
        </div></a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr align="center">
                <th>ID</th>
                <th>KODE MOBIL</th>
                <th>NAMA MOBIL</th>
                <th>STOK</th>
                <th>HARGA</th>
                <th>REACTION</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($data as $datas)
                <tr align="center">
                    <!-- <td>{{ $no++ }}</td> -->
                    <td>{{ $datas->id }}</td>
                    <td>{{ $datas->kd_mobil }}</td>
                    <td>{{ $datas->nama_mobil }}</td>
                    <td>{{ $datas->stok }}</td>
                    <td>{{ $datas->harga }}</td>
                    <td>
                    <?php if(Session::get('hak_akses') == "admin"){ ?>
                        <form action="{{ route('mobil.destroy', $datas->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('mobil.edit', $datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                        </form>
                    <?php } ?>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection