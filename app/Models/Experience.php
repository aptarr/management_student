<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "experiences";
    protected $fillable = [
        "nama_perusahaan",
        "tahun_masukaperusahaan",
        "bulan_masukaperusahaan",
        "status",
        "student_id"
    ];

    public function student (){
        return $this->belongsTo(Student::class);
    }
}
