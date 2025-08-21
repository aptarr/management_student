<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin1',
                'email' => 'a1@ex',
                'email_verified_at' => now(),
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'admin2',
                'email' => 'a2@ex',
                'email_verified_at' => now(),
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $studentId = DB::table('students')->insertGetId([
            'created_by' => 'admin',
            'updated_by' => 'admin',
            'nis' => '123456',
            'nama' => 'Ahmad Fauzi',
            'gender' => 'Laki-laki',
            'nikah' => 'Belum Menikah',
            'tanggal_lahir' => '2005-01-15',
            'umur' => '20',
            'kewarganegaraan' => 'Indonesia',
            'bahasa' => 'Indonesia',
            'domisili' => 'Bandung',
            'nomor' => '08123456789',
            'email' => 'ahmad@example.com',
            'hobi' => 'Membaca',
            'tinggi_badan' => 170,
            'berat_badan' => 60,
            'ukuran_sepatu' => 42,
            'agama' => 'Islam',
            'kelebihan' => 'Teliti',
            'kekurangan' => 'Terlalu perfeksionis',
            'promosi' => 'Saya bisa diandalkan untuk bekerja tim.',
            'tinggal_jp' => 'Ya',
            'keterangan_tinggal_jp' => 'Tinggal di asrama selama pelatihan.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('experiences')->insert([
            [
                'nama_perusahaan' => 'PT Maju Jaya',
                'tahun_masukaperusahaan' => 2022,
                'bulan_masukaperusahaan' => 'Januari',
                'status' => 'Magang',
                'student_id' => $studentId,
            ],
            [
                'nama_perusahaan' => 'CV Teknologi Nusantara',
                'tahun_masukaperusahaan' => 2023,
                'bulan_masukaperusahaan' => 'Februari',
                'status' => 'Part-time',
                'student_id' => $studentId,
            ],
            [
                'nama_perusahaan' => 'Startup Inovatif',
                'tahun_masukaperusahaan' => 2024,
                'bulan_masukaperusahaan' => 'Maret',
                'status' => 'Kontrak',
                'student_id' => $studentId,
            ],
        ]);

        DB::table('educations')->insert([
            [
                'nama_sekolah' => 'SMP Negeri 2 Bandung',
                'tahun_masuksekolah' => '2017',
                'bulan__masuksekolah' => '07',
                'status_sekolah' => 'Lulus',
                'student_id' => $studentId,
            ],
            [
                'nama_sekolah' => 'SMA Negeri 1 Bandung',
                'tahun_masuksekolah' => '2020',
                'bulan__masuksekolah' => '07',
                'status_sekolah' => 'Lulus',
                'student_id' => $studentId,
            ],
        ]);

        DB::table('certificates')->insert([
            [
                'nama_certif' => 'TOEFL',
                'tahun' => '2023',
                'bulan' => '06',
                'student_id' => $studentId,
            ],
            [
                'nama_certif' => 'Microsoft Office Specialist',
                'tahun' => '2024',
                'bulan' => '03',
                'student_id' => $studentId,
            ],
        ]);
    }
}
