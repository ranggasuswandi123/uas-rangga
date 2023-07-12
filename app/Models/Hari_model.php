<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari_model extends Model
{
    use HasFactory;
    protected $table ="hari";
    protected $primaryKey ="id";

    public function tampil_hari(){
        $query = \DB::table('hari')->get();
        return $query;
    }
}
