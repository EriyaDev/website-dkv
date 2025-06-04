<x-dashboard-layout>
    {{-- @dd($schedules); --}}
    <div class="flex flex-row justify-between items-center">
        <h1 class="page-title">Guru</h1>
        <a href="{{ route('admin.jadwal.create') }}"
            class="py-2 px-4 rounded-md bg-accent-color text-white flex flex-row gap-1 items-center"><i
                class="ri-add-line"></i></i>Buat Baru</a>
        {{-- <a href="{{ route('member.archive') }}"
            class="py-2 px-4 rounded-md bg-blue-600 text-white flex flex-row gap-1 items-center"><i
                class="ri-add-line"></i>Archive</a> --}}
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
                    <th class="thead-cell">Nama Guru</th>
                    <th class="thead-cell">Kelas</th>
                    <th class="thead-cell">Hari</th>
                    <th class="thead-cell">Mata Pelajaran</th>
                    <th class="thead-cell">Ruang</th>
                    <th class="thead-cell">Jam Pelajaran</th>
                    <th class="thead-cell rounded-tr-xl">Action</th>
                </thead>
                <tbody>
                    @foreach ($schedules as $schedule)
                        <tr>
                            <td class="table-cell">{{ $loop->iteration }} </td>
                            {{-- @dd($schedule) --}}
                            <td class="table-cell">{{ $schedule->guru->user->name }} </td>
                            <td class="table-cell">{{ $schedule->kelas->nama_kelas }}</td>
                            <td class="table-cell">{{ $schedule->hari }}</td>
                            <td class="table-cell">{{ $schedule->mapel->nama_mapel }}</td>
                            <td class="table-cell">{{ $schedule->ruang->nama_ruang }}</td>
                            <td class="table-cell">
                                {{ \Carbon\Carbon::parse($schedule->jam_pelajaran->jam_mulai)->format('H:i') }} -
                                {{ \Carbon\Carbon::parse($schedule->jam_pelajaran->jam_selesai)->format('H:i') }} </td>
                            {{-- <td class="table-cell">{{ implode('-', str_split($schedule->phone_number, 4)) }} </td> --}}
                            {{-- Untuk No. TElepon --}}
                            <td class="table-cell w-[20%] !text-center">
                                <div class="flex flex-row gap-3 items-center justify-center">
                                    <a class="text-blue-500" href="{{ route('admin.jadwal.show', $schedule->id) }}">
                                        <i class="text-base ri-eye-line text-text-secondary-color"></i>
                                    </a>
                                    <a class="text-blue-500" href="{{ route('admin.jadwal.edit', $schedule->id) }}">
                                        <i class="text-base ri-edit-line text-accent-color"></i>
                                    </a>
                                    <form action="{{ route('admin.jadwal.destroy', $schedule->id) }}" method="post"
                                        onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i
                                                class="text-base ri-delete-bin-line text-red-500"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if ($schedules->isEmpty())
                <div class="w-full flex justify-center p-2">
                    <p class="font-satoshi text-text-primary-color">Looks like there's nothing here yet.</p>
                </div>
            @endif
        </div>
    </div>
</x-dashboard-layout>
