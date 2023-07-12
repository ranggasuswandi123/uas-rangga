@extends('layout.main')
@section('content')


<a href="{{ asset('dosen/tambah')  }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
    <td>No</td>
    <td>nama dosen</td>
    <td>alamat</td>
    <td>no hp</td>
   
    <td>Aksi</td>
 </tr> 
 </thead>

    <tbody>  
<?php 
$no=0;
foreach ($dosen as $rows){
$no++;
?>
<tr>
<td>{{ $no }}</td>
    <td>{{ $rows->nama_dosen }}</td>
    <td>{{ $rows->alamat }}</td>
    <td>{{ $rows->hp }}</td>
    
    <td>
        <a href="{{ asset('dosen/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('dosen/delete/'.$rows->id ) }}">Del</a>
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