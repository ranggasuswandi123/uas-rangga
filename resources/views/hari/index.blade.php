@extends('layout.main')
@section('content')

<h1>Master Transaksi</h1>
<div class="card">
<div class="card-header">
<a href="{{ asset('hari/tambah')  }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
 <td>No</td>
    <td>nama hari</td>
    <td>keterangan</td>
   
    <td>Aksi</td>
 </tr> 
 </thead>

    <tbody>  
<?php 
$no=0;
foreach ($hari as $rows){
$no++;
?>
<tr>
<td>{{ $no }}</td>
    <td>{{ $rows->nama_hari }}</td>
    <td>{{ $rows->keterangan }}</td>
    
    <td>
        <a href="{{ asset('hari/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('hari/delete/'.$rows->id ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
 </tbody>
</table>
</div>
</div>
@endsection