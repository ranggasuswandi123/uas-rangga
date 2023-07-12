<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen_model;

class DosenController extends Controller
{
    public function index(){
        $mydosen = new Dosen_model();
        $dosen = $mydosen->tampil_dosen();
        
        $data = array('dosen' => $dosen);
        return view('dosen/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('dosen/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('dosen')
         ->insert([
             'nama_dosen'  =>  $request->nama_dosen,
             'alamat'  =>  $request->alamat,
             'hp'  =>  $request->hp
             
         ]);
         return redirect('dosen');
     }
 
     public function edit($id){
         // return ('Testing');
         $hari = \DB::table('hari')->where('id', $id)->first();
         //dd($akun);
         $data = array('hari' => $hari);
         return view('hari/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('hari')->where('id',$request->id)
         ->update([
            'nama_hari'  =>  $request->nama_hari,
            'keterangan'  =>  $request->keterangan,
           
            
         ]);
         return redirect('hari');
     }
 
     public function delete ($id){
         $query = \DB::table('hari')->where('id',$id)->delete();
         return redirect('hari');
     }
}
