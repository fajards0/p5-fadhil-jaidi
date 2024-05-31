<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    //Kolom(field) mana saja yang boleh di isi
    public $fillable = ['nama_produk', 'harga', 'gambar', 'deskripsi', 'id_kategori', 'id_brand'];

    //Kolom(field) mana saja yang boleh di perlihatkan
    public $visible = ['nama_produk', 'harga', 'gambar', 'deskripsi', 'id_kategori', 'id_brand'];
    public $timestamps = true;

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function Brand()
    {
        return $this->belongsTo(Brand::class, 'id_brand');
    }

    // menghapus foto
    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/produk/' . $this->gambar))) {
            return unlink(public_path('images/produk/' . $this->gambar));
        }
    }
}
