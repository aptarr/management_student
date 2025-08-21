<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New Student
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <form action="{{ route('students.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @csrf
                    <div>
                        <label for="nis" class="block text-sm font-medium text-gray-700">
                            NIS <span class="text-red-500">*</span>
                        </label>
                        <input required type="text" name="nis" id="nis" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">
                            Nama <span class="text-red-500">*</span>
                        </label>
                        <input required type="text" name="nama" id="nama" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div>
                        <label for="gender" class="block text-sm font-medium text-gray-700">
                            Gender <span class="text-red-500">*</span>
                        </label>
                        <select required name="gender" id="gender" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div>
                        <label for="nikah" class="block text-sm font-medium text-gray-700">
                            Status Nikah  <span class="text-red-500">*</span>
                        </label>
                        <select name="nikah" id="nikah" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                        </select>
                    </div>

                    <div>
                        <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">
                            Tanggal Lahir <span class="text-red-500">*</span>
                        </label>
                        <input required type="date" name="tanggal_lahir" id="tanggal_lahir" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div>
                        <label for="umur" class="block text-sm font-medium text-gray-700">
                            Umur <span class="text-red-500">*</span>
                        </label>
                        <input required type="number" min="0" name="umur" id="umur" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div>
                        <label for="kewarganegaraan" class="block text-sm font-medium text-gray-700">
                            Kewarganegaraan <span class="text-red-500">*</span>
                        </label>
                        <input required type="text" name="kewarganegaraan" id="kewarganegaraan" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div>
                        <label for="bahasa" class="block text-sm font-medium text-gray-700">
                            Bahasa <span class="text-red-500">*</span>
                        </label>
                        <input required type="text" name="bahasa" id="bahasa" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" placeholder="Contoh: Indonesia, Inggris">
                    </div>

                    <div>
                        <label for="domisili" class="block text-sm font-medium text-gray-700">
                            Domisili <span class="text-red-500">*</span>
                        </label>
                        <input required type="text" name="domisili" id="domisili" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div>
                        <label for="nomor" class="block text-sm font-medium text-gray-700">
                            Nomor HP <span class="text-red-500">*</span>
                        </label>
                        <input required type="text" name="nomor" id="nomor" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input required type="email" name="email" id="email" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div>
                        <label for="hobi" class="block text-sm font-medium text-gray-700">
                            Hobi <span class="text-red-500">*</span>
                        </label>
                        <input required type="text" name="hobi" id="hobi" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div>
                        <label for="tinggi_badan" class="block text-sm font-medium text-gray-700">
                            Tinggi Badan (cm) <span class="text-red-500">*</span>
                        </label>
                        <input required type="number" min="0" name="tinggi_badan" id="tinggi_badan" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div>
                        <label for="berat_badan" class="block text-sm font-medium text-gray-700">
                            Berat Badan (kg) <span class="text-red-500">*</span>
                        </label>
                        <input required type="number" min="0" name="berat_badan" id="berat_badan" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div>
                        <label for="ukuran_sepatu" class="block text-sm font-medium text-gray-700">
                            Ukuran Sepatu <span class="text-red-500">*</span>
                        </label>
                        <input required type="number" min="0" name="ukuran_sepatu" id="ukuran_sepatu" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div>
                        <label for="agama" class="block text-sm font-medium text-gray-700">
                            Agama <span class="text-red-500">*</span>
                        </label>
                        <input required type="text" name="agama" id="agama" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mt-4">Riwayat Pendidikan</label>

                        <div id="education-wrapper" class="space-y-2 mt-2"></div>

                        <button type="button" id="add-education" class="mt-2 text-sm text-blue-600 hover:underline">
                            + Tambah Pendidikan
                        </button>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Pengalaman Kerja</label>

                        <div id="experience-wrapper" class="space-y-2 mt-2"></div>

                        <button type="button" class="mt-2 text-sm text-blue-600 hover:underline" id="add-experience">
                            + Tambah Pengalaman
                        </button>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Sertifikat</label>

                        <div id="certificate-wrapper" class="space-y-2 mt-2"></div>

                        <button type="button" id="add-certificate" class="mt-2 text-sm text-blue-600 hover:underline">
                            + Tambah Sertifikat
                        </button>
                    </div>

                    <div class="md:col-span-2">
                        <label for="kelebihan" class="block text-sm font-medium text-gray-700">
                            Kelebihan <span class="text-red-500">*</span>
                        </label>
                        <textarea required name="kelebihan" id="kelebihan" rows="3" class="mt-1 w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>

                    <div class="md:col-span-2">
                        <label for="kekurangan" class="block text-sm font-medium text-gray-700">
                            Kekurangan <span class="text-red-500">*</span>
                        </label>
                        <textarea required name="kekurangan" id="kekurangan" rows="3" class="mt-1 w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>

                    <div class="md:col-span-2">
                        <label for="promosi" class="block text-sm font-medium text-gray-700">
                            Promosi Diri <span class="text-red-500">*</span>
                        </label>
                        <textarea required name="promosi" id="promosi" rows="3" class="mt-1 w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>

                    <div>
                        <label for="tinggal_jp" class="block text-sm font-medium text-gray-700">
                            Tinggal JP <span class="text-red-500">*</span>
                        </label>
                        <select name="tinggal_jp" id="tinggal_jp" class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>

                    <div>
                        <label for="keterangan_tinggal_jp" class="block text-sm font-medium text-gray-700">
                            Keterangan Tinggal JP <span class="text-red-500">*</span>
                        </label>
                        <textarea required name="keterangan_tinggal_jp" id="keterangan_tinggal_jp" rows="2" class="mt-1 w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>

                    <div class="md:col-span-2 flex justify-end items-center space-x-4 pt-4">
                        <x-primary-button>Save</x-primary-button>
                        <a href="{{ route('students.index') }}" class="text-sm text-gray-600 hover:text-gray-800">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">

    </div>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $('input[type="text"]').on('input', function() {
        let valid = /^[a-zA-Z0-9\s,\.]*$/;
        if (!valid.test(this.value)) {
            // Remove invalid characters
            this.value = this.value.replace(/[^a-zA-Z0-9\s,\.]/g, '');
        }
    });


    // EDUCATIONS
    let educationIndex = 0;
    const maxEducations = 7;
    function updateEducationsAddButtonVisibility() {
        if (educationIndex >= maxEducations) {
            $('#add-education').hide();
        } else {
            $('#add-education').show();
        }
    }
    
    $('#add-education').on('click', function () {
        if (educationIndex >= maxEducations) {
            return;
        }

        $('#education-wrapper').append(`
            <div class="grid grid-cols-1 md:grid-cols-[1fr_1fr_1fr_1fr_auto] gap-4">
                <input type="text" name="educations[${educationIndex}][nama_sekolah]" class="border-gray-300 rounded-md shadow-sm" placeholder="Nama Sekolah" required>
                <input type="number" min="0" name="educations[${educationIndex}][tahun_masuksekolah]" class="border-gray-300 rounded-md shadow-sm" placeholder="Tahun Masuk" required>
                <input type="text" name="educations[${educationIndex}][bulan__masuksekolah]" class="border-gray-300 rounded-md shadow-sm" placeholder="Bulan Masuk" required>
                <input type="text" name="educations[${educationIndex}][status_sekolah]" class="border-gray-300 rounded-md shadow-sm" placeholder="Status" required>
                <div class="flex justify-center items-center">
                    <button type="button" class="remove-education w-full md:w-auto bg-red-100/70 text-red-600 hover:bg-red-200 hover:text-red-800 px-3 py-2 rounded-md transition flex justify-center items-center" title="Hapus">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg>
                    </button>
                </div>
            </div>
        `);
        educationIndex++;        
        updateEducationsAddButtonVisibility();
    });

    $(document).on('click', '.remove-education', function () {
        $(this).closest('.grid').remove();
        educationIndex--;
        updateEducationsAddButtonVisibility();
    });

    // EXPERIENCE
    let experienceIndex = 0;
    const maxExperiences = 6;
    function updateExperiencesAddButtonVisibility() {
        if (experienceIndex >= maxExperiences) {
            $('#add-experience').hide();
        } else {
            $('#add-experience').show();
        }
    }

    $('#add-experience').on('click', function () {
        if (experienceIndex >= maxExperiences) {
            return;
        }

        $('#experience-wrapper').append(`
            <div class="grid grid-cols-1 md:grid-cols-[1fr_1fr_1fr_1fr_auto] gap-4 items-center experience-row">
                <input type="text" name="experiences[${experienceIndex}][nama_perusahaan]" class="border-gray-300 rounded-md shadow-sm" placeholder="Nama Perusahaan" required>
                <input type="number" min="0" name="experiences[${experienceIndex}][tahun_masukaperusahaan]" class="border-gray-300 rounded-md shadow-sm" placeholder="Tahun Masuk" required>
                <input type="text" name="experiences[${experienceIndex}][bulan_masukaperusahaan]" class="border-gray-300 rounded-md shadow-sm" placeholder="Bulan Masuk" required>
                <input type="text" name="experiences[${experienceIndex}][status]" class="border-gray-300 rounded-md shadow-sm" placeholder="Status" required>
                <div class="flex justify-center items-center">
                    <button type="button" class="remove-experience w-full md:w-auto bg-red-100/70 text-red-600 hover:bg-red-200 hover:text-red-800 px-3 py-2 rounded-md transition flex justify-center items-center" title="Hapus">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg>
                    </button>
                </div>
            </div>
        `);
        experienceIndex++;
        updateExperiencesAddButtonVisibility();
    });

    $(document).on('click', '.remove-experience', function () {
        $(this).closest('.grid').remove();
        experienceIndex--;
        updateExperiencesAddButtonVisibility();
    });

    // CERTIFICATES
    let certificateIndex = 0;
    const maxCertificates = 4;
    function updateCertificatesAddButtonVisibility() {
        if (certificateIndex >= maxCertificates) {
            $('#add-certificate').hide();
        } else {
            $('#add-certificate').show();
        }
    }

    $('#add-certificate').on('click', function () {
        if (certificateIndex >= maxCertificates) {
            return;
        }

        $('#certificate-wrapper').append(`
            <div class="grid grid-cols-1 md:grid-cols-[1fr_1fr_1fr_auto] gap-4">
                <input type="text" name="certificates[${certificateIndex}][nama_certif]" class="border-gray-300 rounded-md shadow-sm" placeholder="Nama Sertifikat" required>
                <input type="number" min="0" name="certificates[${certificateIndex}][tahun]" class="border-gray-300 rounded-md shadow-sm" placeholder="Tahun" required>
                <input type="text" name="certificates[${certificateIndex}][bulan]" class="border-gray-300 rounded-md shadow-sm" placeholder="Bulan" required>
                <div class="flex justify-center items-center">
                    <button type="button" class="remove-certificate w-full md:w-auto bg-red-100/70 text-red-600 hover:bg-red-200 hover:text-red-800 px-3 py-2 rounded-md transition flex justify-center items-center" title="Hapus">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg>
                    </button>
                </div>
            </div>
        `);
        certificateIndex++;
        updateCertificatesAddButtonVisibility();
    });

    $(document).on('click', '.remove-certificate', function () {
        $(this).closest('.grid').remove();
        certificateIndex--;
        updateCertificatesAddButtonVisibility();
    });
});
</script>
