<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hari_model;

class HariController extends Controller
{
    public function index(){
        $myhari = new Hari_model();
        $hari = $myhari->tampil_hari();
        
        $data = array('hari' => $hari);
        return view('hari/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('hari/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('hari')
         ->insert([
             'nama_hari'  =>  $request->nama_hari,
             'keterangan'  =>  $request->keterangan,
             
         ]);
         return redirect('hari');
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
