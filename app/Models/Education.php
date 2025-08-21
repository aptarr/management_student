<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "educations";
    protected $fillable = [
        "nama_sekolah",
        "tahun_masuksekolah",
        "bulan__masuksekolah",
        "status_sekolah",
        "student_id"
    ];

    public function student (){
        return $this->belongsTo(Student::class);
    }
}
