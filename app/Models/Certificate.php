<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "certificates";
    protected $fillable = [
        "nama_certif",
        "tahun",
        "bulan",
        "student_id"
    ];

    public function student (){
        return $this->belongsTo(Student::class);
    }
}
