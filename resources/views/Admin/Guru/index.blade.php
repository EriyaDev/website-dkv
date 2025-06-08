<x-dashboard-layout>
    {{-- @dd($teachers); --}}
    <div class="flex flex-row justify-between items-center">
        <h1 class="page-title">Guru</h1>
        <a href="{{ route('admin.guru.create') }}"
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
                    <th class="thead-cell">NIP</th>
                    <th class="thead-cell">Nama</th>
                    <th class="thead-cell">Jenis Kelamin</th>
                    <th class="thead-cell">Alamat</th>
                    <th class="thead-cell">No. Telepon</th>
                    <th class="thead-cell rounded-tr-xl">Action</th>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td class="table-cell">{{ $loop->iteration }} </td>
                            <td class="table-cell">{{ $teacher->nip }} </td>
                            <td class="table-cell">{{ $teacher->user->name }}</td>
                            <td class="table-cell">{{ $teacher->jenis_kelamin }}</td>
                            <td class="table-cell">{{ $teacher->alamat }}</td>
                            <td class="table-cell">{{ $teacher->no_telepon }}</td>
                            {{-- <td class="table-cell">{{ implode('-', str_split($teacher->phone_number, 4)) }} </td> --}}
                            {{-- Untuk No. TElepon --}}
                            <td class="table-cell w-[20%] !text-center">
                                <div class="flex flex-row gap-3 items-center justify-center">
                                    <a class="text-blue-500" href="{{ route('admin.guru.show', $teacher->id) }}">
                                        <i class="text-base ri-eye-line text-text-secondary-color"></i>
                                    </a>
                                    <a class="text-blue-500" href="{{ route('admin.guru.edit', $teacher->id) }}">
                                        <i class="text-base ri-edit-line text-accent-color"></i>
                                    </a>
                                    <form action="{{ route('admin.guru.destroy', $teacher->id) }}" method="post"
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

            @if ($teachers->isEmpty())
                <div class="w-full flex justify-center p-2">
                    <p class="font-satoshi text-text-primary-color">Looks like there's nothing here yet.</p>
                </div>
            @endif
        </div>
    </div>
</x-dashboard-layout>
