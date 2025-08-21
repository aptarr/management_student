<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px;}
        table { width: 100%; border-collapse: collapse; margin-bottom: 5px;}
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        h2 { margin-bottom: 10px; }
    </style>
</head>
<body>
    @php
        // Logo base64 encode
        $logoPath = public_path('images/jgec_jgpi_logo.png');
        $logoBase64 = file_exists($logoPath) ? base64_encode(file_get_contents($logoPath)) : null;
    @endphp

    <table>
        <tr>
            <td rowspan="2" style="vertical-align: middle; border-right: none;">
            @if ($logoBase64)
                <img src="data:image/svg+xml;base64,{{ $logoBase64 }}" alt="Logo" style="width: 100px;">
            @endif
            </td>
            <td colspan="4" style="vertical-align: middle; text-align: center; border-left: none; border-bottom: none;">Curiculum Vitae</td>
        </tr>
        <tr>
            <td colspan="4" style="vertical-align: middle; text-align: center;border-left: none; border-top: none;">Pekerja Asing Berketerampilan Khusus</td>
        </tr>
        <tr>
            <th style="width: 150px;">Nama</th>
            <td colspan="4">{{ $student->nama }}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{ $student->gender }}</td>
            <th>Status Nikah</th>
            <td>{{ $student->nikah }}</td>
            <td rowspan="6" style="vertical-align: middle; text-align: center; width: 200px;">
                Photo
            </td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $student->tanggal_lahir }}</td>
            <th>Umur</th>
            <td>{{ $student->umur }}</td>
        </tr>
        <tr>
            <th>Kewarganegaraan</th>
            <td>{{ $student->kewarganegaraan }}</td>
            <th>Bahasa</th>
            <td>{{ $student->bahasa }}</td>
        </tr>
        <tr><th rowspan="3">Domisili</th><td colspan="3">{{ $student->domisili }}</td></tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td colspan="2">{{ $student->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td colspan="2">{{ $student->email }}</td>
        </tr>
    </table>

    <table>
        @if (count($student->educations) > 0)
            <tr>
                <td rowspan="{{ count($student->educations) + 1 }}" style="width: 150px; background-color: #f2f2f2; text-align: center; vertical-align: middle;">
                    Pendidikan
                </td>
                <th>Nama Sekolah</th>
                <th>Tahun Masuk</th>
                <th>Bulan Masuk</th>
                <th>Status</th>
            </tr>
            @foreach ($student->educations as $edu)
            <tr>
                <td>{{ $edu->nama_sekolah }}</td>
                <td>{{ $edu->tahun_masuksekolah }}</td>
                <td>{{ $edu->bulan__masuksekolah }}</td>
                <td>{{ $edu->status_sekolah }}</td>
            </tr>
            @endforeach
        @else
            <tr>
                <td rowspan="2" style="width: 100px; background-color: #f2f2f2; text-align: center; vertical-align: middle;">
                    Pendidikan
                </td>
                <th>Nama Sekolah</th>
                <th>Tahun Masuk</th>
                <th>Bulan Masuk</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
        @endif
    </table>

    <table>
        @if (count($student->experiences) > 0)
            <tr>
                <td rowspan="{{ count($student->experiences) + 1 }}" style="width: 150px; background-color: #f2f2f2; text-align: center; vertical-align: middle;">
                    Pengalaman Kerja
                </td>
                <th>Nama Perusahaan</th>
                <th>Tahun Masuk</th>
                <th>Bulan Masuk</th>
                <th>Status</th>
            </tr>
            @foreach ($student->experiences as $exp)
            <tr>
                <td>{{ $exp->nama_perusahaan }}</td>
                <td>{{ $exp->tahun_masukaperusahaan }}</td>
                <td>{{ $exp->bulan_masukaperusahaan }}</td>
                <td>{{ $exp->status }}</td>
            </tr>
            @endforeach
        @else
            <tr>
                <td rowspan="2" style="width: 150px; background-color: #f2f2f2; text-align: center; vertical-align: middle;">
                    Pengalaman Kerja
                </td>
                <th>Nama Perusahaan</th>
                <th>Tahun Masuk</th>
                <th>Bulan Masuk</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
        @endif
    </table>

    <table>
        @if (count($student->certificates) > 0)
            <tr>
                <td rowspan="{{ count($student->certificates) + 1 }}" style="width: 150px; background-color: #f2f2f2; text-align: center; vertical-align: middle;">
                    Sertifikat
                </td>
                <th>Tahun</th>
                <th>Bulan</th>
                <th>Nama Sertifikat</th>
            </tr>
            @foreach ($student->certificates as $cert)
            <tr>
                <td>{{ $cert->tahun }}</td>
                <td>{{ $cert->bulan }}</td>
                <td>{{ $cert->nama_certif }}</td>
            </tr>
            @endforeach
        @else
            <tr>
                <td rowspan="2" style="width: 150px; background-color: #f2f2f2; text-align: center; vertical-align: middle;">
                    Sertifikat
                </td>
                <th>Nama Sertifikat</th>
                <th>Tahun</th>
                <th>Bulan</th>
            </tr>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
        @endif
    </table>

    <table>
        <tr>
            <th style="width: 150px; ">Hobi</th>
            <td colspan="3">{{ $student->hobi }}</td>
        </tr>
        <tr>
            <th>Ukuran (CM)</th>
            <td>(TB) : {{ $student->tinggi_badan }} / (BB) : {{ $student->berat_badan }} / (ukuran sepatu) : {{ $student->ukuran_sepatu }}</td>
            <th>Agama</th>
            <td>{{ $student->agama }}</td>
        </tr>
    </table>

    <table>
        <tr>
            <th style="width: 150px; border-bottom: none;">Kelebihan</th>
            <td>{{ $student->kelebihan }}</td>
        </tr>
        <tr>
            <th style="border-top: none;">Kekurangan</th>
            <td >{{ $student->kekurangan }}</td>
        </tr>
    </table>

    <table>
        <tr>
            <th style="width: 150px; ">Promosi Diri</th>
            <td colspan="3">{{ $student->promosi }}</td>
        </tr>
        <tr>
            <th>Tinggal JP</th>
            <td>{{ $student->tinggal_jp }}</td>
            <th>Keterangan Tinggal JP</th>
            <td>{{ $student->keterangan_tinggal_jp }}</td>
        </tr>
    </table>
</body>
</html>
