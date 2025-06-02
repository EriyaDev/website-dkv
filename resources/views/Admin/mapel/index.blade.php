<x-dashboard-layout>

    <div class="flex flex-row justify-between items-center">
        <h1 class="page-title">Mata Pelajaran</h1>
        <a href="" class="py-2 px-4 rounded-md bg-blue-600 text-white flex flex-row gap-1 items-center"><i
                class="ri-add-line"></i></i>Buat Baru</a>
        {{-- <a href="{{ route('member.archive') }}"
            class="py-2 px-4 rounded-md bg-blue-600 text-white flex flex-row gap-1 items-center"><i
                class="ri-add-line"></i>Archive</a> --}}
    </div>

    <div class="box-dashboard">

        <div class="w-full overflow-x-auto">
            <table>
                <thead>
                    <th class="thead-cell rounded-tl-xl">#</th>
                    <th class="thead-cell">Nama Mata Pelajaran</th>
                    <th class="thead-cell rounded-tr-xl">Action</th>
                </thead>
                <tbody>
                    {{-- @foreach ($members as $member) --}}
                    <tr>
                        {{-- <td class="table-cell">{{ $loop->iteration }} </td> --}}
                        <td class="table-cell"></td>
                        <td class="table-cell"></td>
                        {{-- <td class="table-cell">{{ implode('-', str_split($member->phone_number, 4)) }} </td> --}}
                        {{-- Untuk No. TElepon --}}
                        <td class="table-cell w-[20%]">
                            <div class="flex flex-row gap-3 items-center justify-center">
                                <a class="text-blue-500" href="">
                                    <i class="text-base ri-eye-line text-text-secondary-color"></i>
                                </a>
                                <a class="text-blue-500" href="">
                                    <i class="text-base ri-edit-line text-accent-color"></i>
                                </a>
                                <form action="" method="post" onsubmit="confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i
                                            class="text-base ri-delete-bin-line text-red-500"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>

            {{-- @if ($members->isEmpty())
                <div class="w-full flex justify-center p-2">
                    <p class="font-satoshi text-text-primary-color">Looks like there's nothing here yet.</p>
                </div>
            @endif --}}
        </div>
    </div>
</x-dashboard-layout>
