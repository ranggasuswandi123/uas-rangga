<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('hari/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $hari->id ?>">
ID <input type="text" name="id" value="<?php echo $hari->id ?>"><br>
Nama Hari <input type="text" name="nama_hari" value="<?php echo $hari->nama_hari ?>"><br>
Keterangan <input type="text" name="keterangan" value="<?php echo $hari->keterangan ?>"><br>
<input type="submit" value="Simpan">
</form>     