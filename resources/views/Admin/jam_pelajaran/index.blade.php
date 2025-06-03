<x-dashboard-layout>

    <div class="flex flex-row justify-between items-center">
        <h1 class="page-title">Jam Pelajaran</h1>
        <a href="{{ url('admin/jam-pelajaran/create') }}"
            class="py-2 px-4 rounded-md bg-blue-600 text-white flex flex-row gap-1 items-center"><i
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
                    <th class="thead-cell">Jam Pelajaran Ke</th>
                    <th class="thead-cell">Jam Mulai</th>
                    <th class="thead-cell">Jam Selesai</th>
                    <th class="thead-cell rounded-tr-xl">Action</th>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td class="table-cell">{{ $loop->iteration }} </td>
                            <td class="table-cell">{{ $item->jam_pelajaran_ke }}</td>
                            <td class="table-cell">{{ \Carbon\Carbon::parse($item->jam_mulai)->format('H:i') }}</td>
                            <td class="table-cell">{{ \Carbon\Carbon::parse($item->jam_selesai)->format('H:i') }}</td>
                            {{-- Untuk No. TElepon --}}
                            <td class="table-cell w-[20%]">
                                <div class="flex flex-row gap-3 items-center justify-center">
                                    <a class="text-blue-500" href="{{ url('admin/jam-pelajaran/' . $item->id) }}">
                                        <i class="text-base ri-eye-line text-text-secondary-color"></i>
                                    </a>
                                    <a class="text-blue-500"
                                        href="{{ url('admin/jam-pelajaran/' . $item->id . '/edit') }}">
                                        <i class="text-base ri-edit-line text-accent-color"></i>
                                    </a>
                                    <form action="{{ url('admin/jam-pelajaran/' . $item->id) }}" method="POST"
                                        onsubmit="confirm('Are you sure?')">
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

            @if ($data->isEmpty())
                <div class="w-full flex justify-center p-2">
                    <p class="font-satoshi text-text-primary-color">Looks like there's nothing here yet.</p>
                </div>
            @endif
        </div>
    </div>
</x-dashboard-layout>
