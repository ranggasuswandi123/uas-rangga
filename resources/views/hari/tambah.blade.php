@extends('layout.main')
@section('content')

<h1>Master data akun</h1>
<div class="card">
<div class="card-header">

<h1>Tambah Data Hari</h1>
<form action="{{ asset('hari/tambah_proses') }}" method="POST">
@csrf
Nama Hari <input type="text" name="nama_hari"><br>
Keterangan <input type="text" name="keterangan"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection