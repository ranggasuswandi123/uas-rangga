<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akuntansitransaksi_model;

class akuntansitransaksiController extends Controller
{
    //
    public function index(){
        $myakuntansitransaksi = new Akuntansitransaksi_model();
        $akuntansitransaksi = $myakuntansitransaksi->tampil_akuntansitransaksi();
        
        $data = array('akuntansitransaksi' => $akuntansitransaksi);
        return view('akuntansitransaksi/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('akuntansitransaksi/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('tbl_akuntansi_transaksi')
         ->insert([
             'kode_jurnal'  =>  $request->kode_jurnal,
             'nomor_perkiraan'  =>  $request->nomor_perkiraan,
             'tanggal_transaksi'  =>  $request->tanggal_transaksi,
             'jenis_transaksi'  =>  $request->jenis_transaksi,
             'keterangan_transaksi'  =>  $request->keterangan_transaksi
             
         ]);
         return redirect('akuntansitransaksi');
     }
 
     public function edit($id){
         // return ('Testing');
         $akun = \DB::table('tbl_akuntansi_transaksi')->where('id', $id)->first();
         //dd($akun);
         $data = array('akuntansitransaksi' => $akuntansitransaksi);
         return view('akuntansitransaksi/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('tbl_akuntansi_transaksi')->where('id',$request->id)
         ->update([
            'kode_jurnal'  =>  $request->kode_jurnal,
            'nomor_perkiraan'  =>  $request->nomor_perkiraan,
            'tanggal_transaksi'  =>  $request->tanggal_transaksi,
            'jenis_transaksi'  =>  $request->jenis_transaksi,
            'keterangan_transaksi'  =>  $request->keterangan_transaksi
            
         ]);
         return redirect('akuntansitransaksi');
     }
 
     public function delete ($id){
         $query = \DB::table('tbl_akuntansi_transaksi')->where('id',$id)->delete();
         return redirect('akuntansitransaksi');
     }
 }
 

