<?php

namespace App\Exports;

use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class StudentsExport implements FromCollection, WithHeadings, WithStyles
{
    protected $students;

    public function __construct(Collection $students)
    {
        $this->students = $students;
    }

    public function collection()
    {
        return $this->students->map(function ($student) {
            return [
                $student->nis,
                $student->nama,
                $student->gender,
                $student->nikah,
                $student->tanggal_lahir,
                $student->umur,
                $student->kewarganegaraan,
                $student->bahasa,
                $student->domisili,
                $student->nomor,
                $student->email,
                $student->hobi,
                $student->tinggi_badan,
                $student->berat_badan,
                $student->ukuran_sepatu,
                $student->agama,
                $student->kelebihan,
                $student->kekurangan,
                $student->promosi,
                $student->tinggal_jp,
                $student->keterangan_tinggal_jp,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'NIS', 'Nama', 'Gender', 'Nikah', 'Tanggal Lahir', 'Umur',
            'Kewarganegaraan', 'Bahasa', 'Domisili', 'Nomor', 'Email',
            'Hobi', 'Tinggi Badan', 'Berat Badan', 'Ukuran Sepatu',
            'Agama', 'Kelebihan', 'Kekurangan', 'Promosi', 'Tinggal JP',
            'Keterangan Tinggal JP',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]], // Apply bold to the first row (header)
        ];
    }
}
