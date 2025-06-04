<x-dashboard-layout>
    <div class="flex flex-row items-center">
        <a href="" class="breadcrumbs-inactive">Jadwal</a>
        <h1 class="breadcrumbs-inactive">/</h1>
        <h1 class="breadcrumbs-active">Lihat</h1>
    </div>

    {{-- @dd($jadwal); --}}

    <div class="box-dashboard">


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
                <x-select-option name="guru_id" id="guru_id" :disabled="true" :required="true">
                    <option value="" selected disabled>--Pilih Guru--</option>
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}" @if (old('guru_id', $teacher->id) == $teacher->id) selected @endif>
                            {{ $teacher->user->name }}</option>
                    @endforeach
                </x-select-option>
            </div>
            <div class="input-group">
                <x-label for="kelas">Kelas</x-label>
                <x-select-option name="kelas_id" id="kelas_id" :disabled="true" :required="true">
                    <option value="" selected disabled>--Pilih Kelas--</option>
                    @foreach ($classes as $class)
                        <option value="{{ $class->id }}" @if (old('kelas_id', $class->id) == $class->id) selected @endif>
                            {{ $class->nama_kelas }}</option>
                    @endforeach
                </x-select-option>
            </div>
            <div class="input-group">
                <x-label for="mapel_id">Mata Pelajaran</x-label>
                <x-select-option name="mapel_id" id="mapel_id" :disabled="true" :required="true">
                    <option value="" selected disabled>--Pilih Mata Pelajaran--</option>
                    @foreach ($mapels as $mapel)
                        <option value="{{ $mapel->id }}" @if (old('mapel_id', $mapel->id) == $mapel->id) selected @endif>
                            {{ $mapel->nama_mapel }}</option>
                    @endforeach
                </x-select-option>
            </div>
            <div class="input-group">
                <x-label for="jam">Jam Pelajaran</x-label>
                <x-select-option name="jam_pelajaran_id" id="jam" :disabled="true" :required="true">
                    <option value="" selected disabled>--Pilih Jam Pelajaran--</option>
                    @foreach ($jamPelajarans as $jam)
                        <option value="{{ $jam->id }}" @if (old('jam_pelajaran_id', $jam->id) == $jam->id) selected @endif>
                            {{ \Carbon\Carbon::parse($jam->jam_mulai)->format('H:i') }} -
                            {{ \Carbon\Carbon::parse($jam->jam_selesai)->format('H:i') }}
                        </option>
                    @endforeach
                </x-select-option>
            </div>
            <div class="input-group">
                <x-label for="ruang">Ruang</x-label>
                <x-select-option name="ruang_id" id="ruang" :disabled="true" :required="true">
                    <option value="" selected disabled>--Pilih Ruang Kelas--</option>
                    @foreach ($rooms as $room)
                        {{-- @dd($rooms) --}}
                        <option value="{{ $room->id }}" @if (old('ruang_id', $room->id) == $room->id) selected @endif>
                            {{ $room->nama_ruang }}</option>
                    @endforeach
                </x-select-option>
            </div>
            <div class="input-group">
                <x-label for="hari">Hari</x-label>
                <x-select-option name="hari" id="hari" :disabled="true" :required="true">
                    <option value="" selected disabled>--Pilih Hari--</option>
                    <option value="Senin" @if (old('hari', $jadwal->hari) == 'Senin') selected @endif>Senin</option>
                    <option value="Selasa" @if (old('hari', $jadwal->hari) == 'Selasa') selected @endif>Selasa</option>
                    <option value="Rabu" @if (old('hari', $jadwal->hari) == 'Rabu') selected @endif>Rabu</option>
                    <option value="Kamis" @if (old('hari', $jadwal->hari) == 'Kamis') selected @endif>Kamis</option>
                    <option value="Jumat" @if (old('hari', $jadwal->hari) == 'Jumat') selected @endif>Jumat</option>
                    <option value="Sabtu" @if (old('hari', $jadwal->hari) == 'Sabtu') selected @endif>Sabtu</option>
                </x-select-option>
            </div>

        </div>
        <div class="flex flex-row gap-3">
            <a href="{{ route('admin.jadwal.index') }}" class="button-secondary" type="submit">Kembali</a>
        </div>
    </div>
</x-dashboard-layout>
