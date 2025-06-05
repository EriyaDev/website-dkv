<x-dashboard-layout-for-guru>
    {{-- @dd($schedules); --}}
    <div class="flex flex-row justify-between items-center">
        <h1 class="page-title">Guru</h1>
    </div>

    @if (Session('success'))
        <div class="w-full mt-4 mb=2 border border-green-200 rounded-md">
            <p class="p-3 bg-green-100 text-green-800 font-medium"><i
                    class="fa-solid fa-circle-check mr-3"></i>{{ Session('success') }}
            </p>
        </div>
    @endif

    <div class="box-dashboard">

        <div class="w-full overflow-x-auto">
            <table>
                <thead>
                    <th class="thead-cell rounded-tl-xl">#</th>
                    {{-- <th class="thead-cell">Nama Guru</th> --}}
                    <th class="thead-cell">Hari</th>
                    <th class="thead-cell">Kelas</th>
                    <th class="thead-cell">Mata Pelajaran</th>
                    <th class="thead-cell">Ruang</th>
                    <th class="thead-cell">Jam Pelajaran</th>
                </thead>
                <tbody>
                    @foreach ($jadwals as $jadwal)
                        <tr>
                            <td class="table-cell">{{ $loop->iteration }} </td>
                            {{-- <td class="table-cell">{{ $jadwal->guru->nama_guru }} </td> --}}
                            <td class="table-cell">{{ $jadwal->hari }}</td>
                            <td class="table-cell">{{ $jadwal->kelas->nama_kelas }}</td>
                            <td class="table-cell">{{ $jadwal->mapel->nama_mapel }}</td>
                            <td class="table-cell">{{ $jadwal->ruang->nama_ruang }}</td>
                            <td class="table-cell">
                                {{ \Carbon\Carbon::parse($jadwal->jam_pelajaran->jam_mulai)->format('H:i') }} -
                                {{ \Carbon\Carbon::parse($jadwal->jam_pelajaran->jam_selesai)->format('H:i') }} </td>
                            {{-- <td class="table-cell">{{ implode('-', str_split($jadwal->phone_number, 4)) }} </td> --}}
                            {{-- Untuk No. TElepon --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if ($jadwals->isEmpty())
                <div class="w-full flex justify-center p-2">
                    <p class="font-satoshi text-text-primary-color">Looks like there's nothing here yet.</p>
                </div>
            @endif
        </div>
    </div>
</x-dashboard-layout-for-guru>
