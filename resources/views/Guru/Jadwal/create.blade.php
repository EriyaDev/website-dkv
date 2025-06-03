<x-dashboard-layout>
    <div class="flex flex-row items-center">
        <a href="" class="breadcrumbs-inactive">Jadwal</a>
        <h1 class="breadcrumbs-inactive">/</h1>
        <h1 class="breadcrumbs-active">Buat</h1>
    </div>



    <div class="box-dashboard">
        <form action="{{ route('admin.jadwal.store') }}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="p-3 rounded-md text-red-500 border border-red-500 bg-[#ef44441a] mb-5">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>Error: {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="input-container">
                <div class="input-group">
                    <x-label for="guru_id">Nama Guru</x-label>
                    <x-select-option name="guru_id" id="guru_id" :disabled="false" :required="true">
                        <option value="" selected disabled>--Pilih Guru--</option>
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                        @endforeach
                    </x-select-option>
                </div>
                <div class="input-group">
                    <x-label for="kelas">Kelas</x-label>
                    <x-select-option name="kelas_id" id="kelas_id" :disabled="false" :required="true">
                        <option value="" selected disabled>--Pilih Kelas--</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->nama_kelas }}</option>
                        @endforeach
                    </x-select-option>
                </div>
                <div class="input-group">
                    <x-label for="mapel_id">Mata Pelajaran</x-label>
                    <x-select-option name="mapel_id" id="mapel_id" :disabled="false" :required="true">
                        <option value="" selected disabled>--Pilih Mata Pelajaran--</option>
                        @foreach ($mapels as $mapel)
                            <option value="{{ $mapel->id }}">{{ $mapel->nama_mapel }}</option>
                        @endforeach
                    </x-select-option>
                </div>
                <div class="input-group">
                    <x-label for="jam">Jam Pelajaran</x-label>
                    <x-select-option name="jam_pelajaran_id" id="jam" :disabled="false" :required="true">
                        <option value="" selected disabled>--Pilih Jam Pelajaran--</option>
                        @foreach ($jamPelajarans as $jam)
                            <option value="{{ $jam->id }}">
                                {{ \Carbon\Carbon::parse($jam->jam_mulai)->format('H:i') }} -
                                {{ \Carbon\Carbon::parse($jam->jam_selesai)->format('H:i') }}
                            </option>
                        @endforeach
                    </x-select-option>
                </div>
                <div class="input-group">
                    <x-label for="ruang">Ruang</x-label>
                    <x-select-option name="ruang_id" id="ruang" :disabled="false" :required="true">
                        <option value="" selected disabled>--Pilih Ruang Kelas--</option>
                        @foreach ($rooms as $room)
                            {{-- @dd($rooms) --}}
                            <option value="{{ $room->id }}">{{ $room->nama_ruang }}</option>
                        @endforeach
                    </x-select-option>
                </div>
                <div class="input-group">
                    <x-label for="hari">Hari</x-label>
                    <x-select-option name="hari" id="hari" :disabled="false" :required="true">
                        <option value="" selected disabled>--Pilih Hari--</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                    </x-select-option>
                </div>

            </div>
            <div class="flex flex-row gap-3">
                <a href="{{ route('admin.jadwal.index') }}" class="button-secondary" type="submit">Cancel</a>
                <button class="button-primary" type="submit">Confirm</button>
            </div>
        </form>
    </div>
</x-dashboard-layout>
