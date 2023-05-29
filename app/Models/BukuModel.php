<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    use HasFactory;
    protected $table        = "buku";
    protected $primaryKey   = "id_buku";
    protected $fillable     = ['id_buku','kode_buku','judul','pengarang','kategori'];
}