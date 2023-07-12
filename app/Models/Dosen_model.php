<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen_model extends Model
{
    use HasFactory;
    protected $table ="dosen";
    protected $primaryKey ="id";

    public function tampil_dosen(){
        $query = \DB::table('dosen')->get();
        return $query;
    }
}
