@extends('layout.main')
@section('content')

<h1>Tambah Data Dosen</h1>
<form action="{{ asset('dosen/tambah_proses') }}" method="POST">
@csrf
Nama Dosen <input type="text" name="nama_dosen"><br>
alamat <input type="text" name="alamat"><br>
no hp <input type="text" name="hp"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection