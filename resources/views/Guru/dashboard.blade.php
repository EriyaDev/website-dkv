<x-dashboard-layout-for-guru>
    <div class="grid grid-cols-1 gap-5">
        <div class="flex flex-row items-center">
            <a href="" class="page-title">Selamat Datang, <span
                    class="text-accent-color">{{ $user->name }}!</span></a>
        </div>

        <div class="grid grid-cols-1 gap-3">

            <h1 class="page-title">Jadwal Mengajar Guru</h1>
            <div class="box-dashboard !mt-0">
                <h1 class="box-title !text-xl">Senin</h1>
                <div class="w-full overflow-x-auto">
                    <table>
                        <thead>
                            <th class="thead-cell rounded-tl-xl">#</th>
                            <th class="thead-cell">Nama Guru</th>
                            <th class="thead-cell">Mata Pelajaran</th>
                            <th class="thead-cell">Kelas</th>
                            <th class="thead-cell">Ruang</th>
                            <th class="thead-cell">Jam Pelajaran</th>
                        </thead>
                        <tbody>
                            @foreach ($senin as $hari_senin)
                                <tr>
                                    <td class="table-cell">{{ $loop->iteration }} </td>
                                    <td class="table-cell">{{ $hari_senin->guru->user->name }} </td>
                                    <td class="table-cell">{{ $hari_senin->mapel->nama_mapel }}</td>
                                    <td class="table-cell">{{ $hari_senin->kelas->nama_kelas }}</td>
                                    <td class="table-cell">{{ $hari_senin->ruang->nama_ruang }}</td>
                                    <td class="table-cell">
                                        {{ \Carbon\Carbon::parse($hari_senin->jam_pelajaran->jam_mulai)->format('H:i') }}
                                        -
                                        {{ \Carbon\Carbon::parse($hari_senin->jam_pelajaran->jam_selesai)->format('H:i') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($senin->isEmpty())
                        <div class="w-full flex justify-center p-2">
                            <p class="font-satoshi text-text-primary-color">Looks like there's nothing here yet.</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="box-dashboard !mt-0">
                <h1 class="box-title !text-xl">Selasa</h1>
                <div class="w-full overflow-x-auto">
                    <table>
                        <thead>
                            <th class="thead-cell rounded-tl-xl">#</th>
                            <th class="thead-cell">Nama Guru</th>
                            <th class="thead-cell">Mata Pelajaran</th>
                            <th class="thead-cell">Kelas</th>
                            <th class="thead-cell">Ruang</th>
                            <th class="thead-cell">Jam Pelajaran</th>
                        </thead>
                        <tbody>
                            @foreach ($selasa as $hari_selasa)
                                <tr>
                                    <td class="table-cell">{{ $loop->iteration }} </td>
                                    <td class="table-cell">{{ $hari_selasa->guru->user->name }} </td>
                                    <td class="table-cell">{{ $hari_selasa->mapel->nama_mapel }}</td>
                                    <td class="table-cell">{{ $hari_selasa->kelas->nama_kelas }}</td>
                                    <td class="table-cell">{{ $hari_selasa->ruang->nama_ruang }}</td>
                                    <td class="table-cell">
                                        {{ \Carbon\Carbon::parse($hari_selasa->jam_pelajaran->jam_mulai)->format('H:i') }}
                                        -
                                        {{ \Carbon\Carbon::parse($hari_selasa->jam_pelajaran->jam_selesai)->format('H:i') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($selasa->isEmpty())
                        <div class="w-full flex justify-center p-2">
                            <p class="font-satoshi text-text-primary-color">Looks like there's nothing here yet.</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="box-dashboard !mt-0">
                <h1 class="box-title !text-xl">Rabu</h1>
                <div class="w-full overflow-x-auto">
                    <table>
                        <thead>
                            <th class="thead-cell rounded-tl-xl">#</th>
                            <th class="thead-cell">Nama Guru</th>
                            <th class="thead-cell">Mata Pelajaran</th>
                            <th class="thead-cell">Kelas</th>
                            <th class="thead-cell">Ruang</th>
                            <th class="thead-cell">Jam Pelajaran</th>
                        </thead>
                        <tbody>
                            @foreach ($rabu as $hari_rabu)
                                <tr>
                                    <td class="table-cell">{{ $loop->iteration }} </td>
                                    <td class="table-cell">{{ $hari_rabu->guru->user->name }} </td>
                                    <td class="table-cell">{{ $hari_rabu->mapel->nama_mapel }}</td>
                                    <td class="table-cell">{{ $hari_rabu->kelas->nama_kelas }}</td>
                                    <td class="table-cell">{{ $hari_rabu->ruang->nama_ruang }}</td>
                                    <td class="table-cell">
                                        {{ \Carbon\Carbon::parse($hari_rabu->jam_pelajaran->jam_mulai)->format('H:i') }}
                                        -
                                        {{ \Carbon\Carbon::parse($hari_rabu->jam_pelajaran->jam_selesai)->format('H:i') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($rabu->isEmpty())
                        <div class="w-full flex justify-center p-2">
                            <p class="font-satoshi text-text-primary-color">Looks like there's nothing here yet.</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="box-dashboard !mt-0">
                <h1 class="box-title !text-xl">Kamis</h1>
                <div class="w-full overflow-x-auto">
                    <table>
                        <thead>
                            <th class="thead-cell rounded-tl-xl">#</th>
                            <th class="thead-cell">Nama Guru</th>
                            <th class="thead-cell">Mata Pelajaran</th>
                            <th class="thead-cell">Kelas</th>
                            <th class="thead-cell">Ruang</th>
                            <th class="thead-cell">Jam Pelajaran</th>
                        </thead>
                        <tbody>
                            @foreach ($kamis as $hari_kamis)
                                <tr>
                                    <td class="table-cell">{{ $loop->iteration }} </td>
                                    <td class="table-cell">{{ $hari_kamis->guru->user->name }} </td>
                                    <td class="table-cell">{{ $hari_kamis->mapel->nama_mapel }}</td>
                                    <td class="table-cell">{{ $hari_kamis->kelas->nama_kelas }}</td>
                                    <td class="table-cell">{{ $hari_kamis->ruang->nama_ruang }}</td>
                                    <td class="table-cell">
                                        {{ \Carbon\Carbon::parse($hari_kamis->jam_pelajaran->jam_mulai)->format('H:i') }}
                                        -
                                        {{ \Carbon\Carbon::parse($hari_kamis->jam_pelajaran->jam_selesai)->format('H:i') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($kamis->isEmpty())
                        <div class="w-full flex justify-center p-2">
                            <p class="font-satoshi text-text-primary-color">Looks like there's nothing here yet.</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="box-dashboard !mt-0">
                <h1 class="box-title !text-xl">Jumat</h1>
                <div class="w-full overflow-x-auto">
                    <table>
                        <thead>
                            <th class="thead-cell rounded-tl-xl">#</th>
                            <th class="thead-cell">Nama Guru</th>
                            <th class="thead-cell">Mata Pelajaran</th>
                            <th class="thead-cell">Kelas</th>
                            <th class="thead-cell">Ruang</th>
                            <th class="thead-cell">Jam Pelajaran</th>
                        </thead>
                        <tbody>
                            @foreach ($jumat as $hari_jumat)
                                <tr>
                                    <td class="table-cell">{{ $loop->iteration }} </td>
                                    <td class="table-cell">{{ $hari_jumat->guru->user->name }} </td>
                                    <td class="table-cell">{{ $hari_jumat->mapel->nama_mapel }}</td>
                                    <td class="table-cell">{{ $hari_jumat->kelas->nama_kelas }}</td>
                                    <td class="table-cell">{{ $hari_jumat->ruang->nama_ruang }}</td>
                                    <td class="table-cell">
                                        {{ \Carbon\Carbon::parse($hari_jumat->jam_pelajaran->jam_mulai)->format('H:i') }}
                                        -
                                        {{ \Carbon\Carbon::parse($hari_jumat->jam_pelajaran->jam_selesai)->format('H:i') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($jumat->isEmpty())
                        <div class="w-full flex justify-center p-2">
                            <p class="font-satoshi text-text-primary-color">Looks like there's nothing here yet.</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="box-dashboard !mt-0">
                <h1 class="box-title !text-xl">Sabtu</h1>
                <div class="w-full overflow-x-auto">
                    <table>
                        <thead>
                            <th class="thead-cell rounded-tl-xl">#</th>
                            <th class="thead-cell">Nama Guru</th>
                            <th class="thead-cell">Mata Pelajaran</th>
                            <th class="thead-cell">Kelas</th>
                            <th class="thead-cell">Ruang</th>
                            <th class="thead-cell">Jam Pelajaran</th>
                        </thead>
                        <tbody>
                            @foreach ($sabtu as $hari_sabtu)
                                <tr>
                                    <td class="table-cell">{{ $loop->iteration }} </td>
                                    <td class="table-cell">{{ $hari_sabtu->guru->user->name }} </td>
                                    <td class="table-cell">{{ $hari_sabtu->mapel->nama_mapel }}</td>
                                    <td class="table-cell">{{ $hari_sabtu->kelas->nama_kelas }}</td>
                                    <td class="table-cell">{{ $hari_sabtu->ruang->nama_ruang }}</td>
                                    <td class="table-cell">
                                        {{ \Carbon\Carbon::parse($hari_sabtu->jam_pelajaran->jam_mulai)->format('H:i') }}
                                        -
                                        {{ \Carbon\Carbon::parse($hari_sabtu->jam_pelajaran->jam_selesai)->format('H:i') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($sabtu->isEmpty())
                        <div class="w-full flex justify-center p-2">
                            <p class="font-satoshi text-text-primary-color">Looks like there's nothing here yet.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout-for-guru>
