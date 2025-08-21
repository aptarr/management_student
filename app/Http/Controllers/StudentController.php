<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    private function applyStudentFilters(Request $request)
    {
        $query = Student::query();

        if ($request->filled('nis')) {
            $query->where('nis', 'like', '%'.$request->nis.'%');
        }
        if ($request->filled('nama')) {
            $query->where('nama', 'like', '%'.$request->nama.'%');
        }
        if ($request->filled('gender')) {
            $query->where('gender', 'like', '%'.$request->gender.'%');
        }
        if ($request->filled('nikah')) {
            $query->where('nikah', 'like', '%'.$request->nikah.'%');
        }
        if ($request->filled('tanggal_lahir')) {
            $query->where('tanggal_lahir', 'like', '%'.$request->tanggal_lahir.'%');
        }
        if ($request->filled('umur')) {
            $query->where('umur', 'like', '%'.$request->umur.'%');
        }
        if ($request->filled('kewarganegaraan')) {
            $query->where('kewarganegaraan', 'like', '%'.$request->kewarganegaraan.'%');
        }
        if ($request->filled('bahasa')) {
            $query->where('bahasa', 'like', '%'.$request->bahasa.'%');
        }
        if ($request->filled('domisili')) {
            $query->where('domisili', 'like', '%'.$request->domisili.'%');
        }
        if ($request->filled('nomor')) {
            $query->where('nomor', 'like', '%'.$request->nomor.'%');
        }
        if ($request->filled('email')) {
            $query->where('email', 'like', '%'.$request->email.'%');
        }
        if ($request->filled('hobi')) {
            $query->where('hobi', 'like', '%'.$request->hobi.'%');
        }
        if ($request->filled('tinggi_badan')) {
            $query->where('tinggi_badan', 'like', '%'.$request->tinggi_badan.'%');
        }
        if ($request->filled('berat_badan')) {
            $query->where('berat_badan', 'like', '%'.$request->berat_badan.'%');
        }
        if ($request->filled('ukuran_sepatu')) {
            $query->where('ukuran_sepatu', 'like', '%'.$request->ukuran_sepatu.'%');
        }
        if ($request->filled('agama')) {
            $query->where('agama', 'like', '%'.$request->agama.'%');
        }
        if ($request->filled('kelebihan')) {
            $query->where('kelebihan', 'like', '%'.$request->kelebihan.'%');
        }
        if ($request->filled('kekurangan')) {
            $query->where('kekurangan', 'like', '%'.$request->kekurangan.'%');
        }
        if ($request->filled('promosi')) {
            $query->where('promosi', 'like', '%'.$request->promosi.'%');
        }
        if ($request->filled('tinggal_jp')) {
            $query->where('tinggal_jp', 'like', '%'.$request->tinggal_jp.'%');
        }
        if ($request->filled('keterangan_tinggal_jp')) {
            $query->where('keterangan_tinggal_jp', 'like', '%'.$request->keterangan_tinggal_jp.'%');
        }

        return $query;
    }

    public function getStudents(Request $request)
    {
        $query = $this->applyStudentFilters($request);
        $students = $query->paginate(10);

        return view('student.index', compact('students'));
    }


    public function getStudentCreate(){
        $students = Student::all();
        return view('student.create');
    }

    public function getStudentDetail($staff_id){
        $student = Student::with(['experiences', 'educations', 'certificates'])->findOrFail($staff_id);
        return view('student.edit', compact('student'));
    }

    public function createStudent(Request $request){
        DB::transaction(function () use ($request) {
            // 1. Create the student
            $validated = $request->validate([
                'nis' => 'required|string|max:255',
                'nama' => 'required|string|max:255',
                'gender' => 'required|string|in:Laki-laki,Perempuan',
                'nikah' => 'required|string|in:Belum Menikah,Menikah',
                'tanggal_lahir' => 'required|date',
                'umur' => 'required|integer|min:0',
                'kewarganegaraan' => 'required|string|max:255',
                'bahasa' => 'required|string|max:255',
                'domisili' => 'required|string|max:255',
                'nomor' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'hobi' => 'nullable|string|max:255',
                'tinggi_badan' => 'nullable|integer|min:0',
                'berat_badan' => 'nullable|integer|min:0',
                'ukuran_sepatu' => 'nullable|integer|min:0',
                'agama' => 'nullable|string|max:255',
                'kelebihan' => 'nullable|string',
                'kekurangan' => 'nullable|string',
                'promosi' => 'nullable|string',
                'tinggal_jp' => 'required|string|in:Ya,Tidak',
                'keterangan_tinggal_jp' => 'nullable|string',
            ]);

            $student = Student::create(array_merge(
                $validated,
                [
                    'created_by' => auth()->user()->name,
                    'updated_by' => auth()->user()->name,
                ]
            ));

            // 3. Save related experiences
            if ($request->has('experiences')) {
                foreach ($request->experiences as $exp) {
                    $student->experiences()->create([
                        'nama_perusahaan' => $exp['nama_perusahaan'],
                        'tahun_masukaperusahaan' => $exp['tahun_masukaperusahaan'],
                        'bulan_masukaperusahaan' => $exp['bulan_masukaperusahaan'],
                        'status' => $exp['status'],
                    ]);
                }
            }

            // 4. Save related educations
            if ($request->has('educations')) {
                foreach ($request->educations as $edu) {
                    $student->educations()->create([
                        'nama_sekolah' => $edu['nama_sekolah'],
                        'tahun_masuksekolah' => $edu['tahun_masuksekolah'],
                        'bulan__masuksekolah' => $edu['bulan__masuksekolah'],
                        'status_sekolah' => $edu['status_sekolah'],
                    ]);
                }
            }

            // 5. Save related certificates
            if ($request->has('certificates')) {
                foreach ($request->certificates as $cert) {
                    $student->certificates()->create([
                        'nama_certif' => $cert['nama_certif'],
                        'tahun' => $cert['tahun'],
                        'bulan' => $cert['bulan'],
                    ]);
                }
            }
        });

        return redirect()->route('students.index')->with('success', 'Student created successfully!');
    }

    public function updateStudent(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            // 1. Find the student
            $student = Student::findOrFail($id);

            // 2. Validate the main student fields
            $validated = $request->validate([
                'nis' => 'required|string|max:255',
                'nama' => 'required|string|max:255',
                'gender' => 'required|string|in:Laki-laki,Perempuan',
                'nikah' => 'required|string|in:Belum Menikah,Menikah',
                'tanggal_lahir' => 'required|date',
                'umur' => 'required|integer|min:0',
                'kewarganegaraan' => 'required|string|max:255',
                'bahasa' => 'required|string|max:255',
                'domisili' => 'required|string|max:255',
                'nomor' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'hobi' => 'nullable|string|max:255',
                'tinggi_badan' => 'nullable|integer|min:0',
                'berat_badan' => 'nullable|integer|min:0',
                'ukuran_sepatu' => 'nullable|integer|min:0',
                'agama' => 'nullable|string|max:255',
                'kelebihan' => 'nullable|string',
                'kekurangan' => 'nullable|string',
                'promosi' => 'nullable|string',
                'tinggal_jp' => 'required|string|in:Ya,Tidak',
                'keterangan_tinggal_jp' => 'nullable|string',
            ]);

            // 3. Update the student data
            $student->update(array_merge(
                $validated,
                [
                    'updated_by' => auth()->user()->name,
                ]
            ));

            // 4. Delete old related data (optional, depends on your logic)
            $student->experiences()->delete();
            $student->educations()->delete();
            $student->certificates()->delete();

            // 5. Save related experiences (if any)
            if ($request->has('experiences')) {
                foreach ($request->experiences as $exp) {
                    $student->experiences()->create([
                        'nama_perusahaan' => $exp['nama_perusahaan'],
                        'tahun_masukaperusahaan' => $exp['tahun_masukaperusahaan'],
                        'bulan_masukaperusahaan' => $exp['bulan_masukaperusahaan'],
                        'status' => $exp['status'],
                    ]);
                }
            }

            // 6. Save related educations (if any)
            if ($request->has('educations')) {
                foreach ($request->educations as $edu) {
                    $student->educations()->create([
                        'nama_sekolah' => $edu['nama_sekolah'],
                        'tahun_masuksekolah' => $edu['tahun_masuksekolah'],
                        'bulan__masuksekolah' => $edu['bulan__masuksekolah'],
                        'status_sekolah' => $edu['status_sekolah'],
                    ]);
                }
            }

            // 7. Save related certificates (if any)
            if ($request->has('certificates')) {
                foreach ($request->certificates as $cert) {
                    $student->certificates()->create([
                        'nama_certif' => $cert['nama_certif'],
                        'tahun' => $cert['tahun'],
                        'bulan' => $cert['bulan'],
                    ]);
                }
            }
        });

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }


    public function deleteStudent($staff_id){
        $student = Student::findOrFail($staff_id);
        dd($student);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
    
    public function exportFilteredStudents(Request $request)
    {
        $query = $this->applyStudentFilters($request);

        $students = $query->get();

        $fileName = 'data_siswa_' . Carbon::now()->format('Y-m-d') . '.xlsx';

        return Excel::download(new StudentsExport($students), $fileName);
    }

    
    public function exportStudentsData($id)
    {
        $student = Student::with(['experiences', 'educations', 'certificates'])->findOrFail($id);

        // Prepare view with student data (we'll create this view next)
        $pdf = PDF::loadView('student.export', compact('student'));

        // Return the PDF file as download or inline
        return $pdf->download('student_'.$student->name.'.pdf');
    }

}
