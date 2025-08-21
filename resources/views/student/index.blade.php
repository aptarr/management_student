<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Student List
            </h2>

            <div class="space-x-4 flex">
                <a href="{{ route('students.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-1 px-4 rounded text-l flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                    </svg>
                    <span>Add Student</span>
                </a>
                <a href="{{ route('students.export', request()->query()) }}" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-1 px-4 rounded text-l flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-download font-bold" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                    </svg>
                    <span>Export to Excel</span>
                </a>                            
                <button id="filterButton" type="submit" form="searchForm" class="bg-gray-500 hover:bg-gray-600 text-white px-3 py-1 rounded font-semibold text-l flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                    <span>Filter</span>                    
                </button>
            </div>
        </div>
    </x-slot>

    <div class="py-6 mx-auto sm:px-6 lg:px-8">
        <div class="overflow-x-auto w-full">
            <table class="table-auto w-full">                    
                <form id="searchForm" method="GET" action="{{ route('students.index') }}">     
                    <div class="justify-end mb-4 hidden">
                    </div>
                    <tr>
                        <th class="border px-4 py-2">No</th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            NIS
                            <input type="text" name="nis" value="{{ request('nis') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search NIS" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Nama
                            <input type="text" name="nama" value="{{ request('nama') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Nama" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Gender
                            <input type="text" name="gender" value="{{ request('gender') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Gender" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Nikah
                            <input type="text" name="nikah" value="{{ request('nikah') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Nikah" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Tanggal Lahir
                            <input type="text" name="tanggal_lahir" value="{{ request('tanggal_lahir') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Tanggal Lahir" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Umur
                            <input type="text" name="umur" value="{{ request('umur') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Umur" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Kewarganegaraan
                            <input type="text" name="kewarganegaraan" value="{{ request('kewarganegaraan') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Kewarganegaraan" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Bahasa
                            <input type="text" name="bahasa" value="{{ request('bahasa') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Bahasa" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Domisili
                            <input type="text" name="domisili" value="{{ request('domisili') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Domisili" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Nomor
                            <input type="text" name="nomor" value="{{ request('nomor') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Nomor" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Email
                            <input type="text" name="email" value="{{ request('email') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Email" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Hobi
                            <input type="text" name="hobi" value="{{ request('hobi') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Hobi" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Tinggi Badan
                            <input type="text" name="tinggi_badan" value="{{ request('tinggi_badan') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Tinggi" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Berat Badan
                            <input type="text" name="berat_badan" value="{{ request('berat_badan') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Berat" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Ukuran Sepatu
                            <input type="text" name="ukuran_sepatu" value="{{ request('ukuran_sepatu') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Sepatu" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Agama
                            <input type="text" name="agama" value="{{ request('agama') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Agama" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Kelebihan
                            <input type="text" name="kelebihan" value="{{ request('kelebihan') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Kelebihan" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Kekurangan
                            <input type="text" name="kekurangan" value="{{ request('kekurangan') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Kekurangan" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Promosi
                            <input type="text" name="promosi" value="{{ request('promosi') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Promosi" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">
                            Tinggal JP
                            <input type="text" name="tinggal_jp" value="{{ request('tinggal_jp') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Tinggal JP" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[350px]">
                            Keterangan Tinggal JP
                            <input type="text" name="keterangan_tinggal_jp" value="{{ request('keterangan_tinggal_jp') }}" class="mt-1 block w-full border rounded px-2 py-1 text-sm" placeholder="Search Keterangan" form="searchForm" />
                        </th>
                        <th class="border px-4 py-2 min-w-[150px]">Actions</th>
                    </tr>
                </form>
                @foreach($students as $student)
                <tr>
                    <td class="border px-4 py-2">{{ $loop->iteration }}</td> 
                    <td class="border px-4 py-2">{{ $student->nis }}</td>
                    <td class="border px-4 py-2">{{ $student->nama }}</td>
                    <td class="border px-4 py-2">{{ $student->gender }}</td>
                    <td class="border px-4 py-2">{{ $student->nikah }}</td>
                    <td class="border px-4 py-2">{{ $student->tanggal_lahir }}</td>
                    <td class="border px-4 py-2">{{ $student->umur }}</td>
                    <td class="border px-4 py-2">{{ $student->kewarganegaraan }}</td>
                    <td class="border px-4 py-2">{{ $student->bahasa }}</td>
                    <td class="border px-4 py-2">{{ $student->domisili }}</td>
                    <td class="border px-4 py-2">{{ $student->nomor }}</td>
                    <td class="border px-4 py-2">{{ $student->email }}</td>
                    <td class="border px-4 py-2">{{ $student->hobi }}</td>
                    <td class="border px-4 py-2">{{ $student->tinggi_badan }}</td>
                    <td class="border px-4 py-2">{{ $student->berat_badan }}</td>
                    <td class="border px-4 py-2">{{ $student->ukuran_sepatu }}</td>
                    <td class="border px-4 py-2">{{ $student->agama }}</td>
                    <td class="border px-4 py-2">{{ $student->kelebihan }}</td>
                    <td class="border px-4 py-2">{{ $student->kekurangan }}</td>
                    <td class="border px-4 py-2">{{ $student->promosi }}</td>
                    <td class="border px-4 py-2">{{ $student->tinggal_jp }}</td>
                    <td class="border px-4 py-2">{{ $student->keterangan_tinggal_jp }}</td>
                    <td class="border px-4 py-2">
                        <div class="flex items-center space-x-2">
                            <div>
                                <a href="{{ route('students.edit', $student->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-1 px-3 rounded text-sm inline-block">
                                    Edit
                                </a>
                            </div>
                            <div>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="delete-button bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-3 rounded text-sm"
                                        onclick="return confirm('Hapus data ini?')"
                                    >
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        <div class="mt-4">
            {{ $students->withQueryString()->links() }}
        </div>
    </div>
</x-app-layout>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const form = document.getElementById('searchForm');
        const filterButton = document.getElementById('filterButton');

        form.addEventListener('submit', function (e) {
            if (filterButton.disabled) {
                e.preventDefault();
                return false;
            }
            filterButton.disabled = true;
            filterButton.innerText = 'Filtering...';
        });

        document.querySelectorAll('input[form="searchForm"]').forEach(input => {
            input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    document.getElementById('searchForm').submit();
                }
            });
        });

        document.querySelectorAll('form').forEach(form => {
            const deleteBtn = form.querySelector('.delete-button');
            if (deleteBtn) {
                form.addEventListener('submit', function (e) {
                    deleteBtn.disabled = true;
                    deleteBtn.innerText = 'Deleting...';
                });
            }
        });
    });
</script>
