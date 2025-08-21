<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";
    protected $fillable = [
        "created_by",
        "updated_by",
        "nis",
        "nama",
        "gender",
        "nikah",
        "tanggal_lahir",
        "umur",
        "kewarganegaraan",
        "bahasa",
        "domisili",
        "nomor",
        "email",
        "hobi",
        "tinggi_badan",
        "berat_badan",
        "ukuran_sepatu",
        "agama",
        "kelebihan",
        "kekurangan",
        "promosi",
        "tinggal_jp",
        "keterangan_tinggal_jp",
    ];

    public function certificates (){
        return $this->hasMany(Certificate::class);
    }

    public function experiences (){
        return $this->hasMany(Experience::class);
    }

    public function educations (){
        return $this->hasMany(Education::class);
    }
}
