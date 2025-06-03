<x-dashboard-layout>
    <div class="flex flex-row items-center">
        <a href="" class="breadcrumbs-inactive">Guru</a>
        <h1 class="breadcrumbs-inactive">/</h1>
        <h1 class="breadcrumbs-active">Lihat</h1>
    </div>



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
                <x-label for="nip">NIP</x-label>
                <x-input id="nip" type="text" :disabled="true" name="nip" value="{{ old('nip') }}"
                    placeholder="Masukkan NIP guru..."></x-input>
            </div>
            <div class="input-group">
                <x-label for="nama">Nama</x-label>
                <x-input id="nama" type="text" :disabled="true" name="nama" value="{{ old('nama') }}"
                    placeholder="Masukkan nama guru..."></x-input>
            </div>
            <div class="input-group">
                <x-label for="jenis_kelamin">Jenis Kelamin</x-label>
                <x-select-option name="jenis_kelamin" id="jenis_kelamin" :disabled="true">
                    <option value="" selected disabled>--Pilih Jenis Kelamin--</option>
                </x-select-option>
            </div>
            <div class="input-group">
                <x-label for="alamat">Alamat</x-label>
                <x-input id="alamat" type="text" :disabled="true" name="alamat" value="{{ old('alamat') }}"
                    placeholder="Masukkan alamat guru..."></x-input>
            </div>
            <div class="input-group">
                <x-label for="no_telepon">No. Telepon</x-label>
                <x-input id="no_telepon" type="tel" :disabled="true" name="no_telepon"
                    value="{{ old('no_telepon') }}" placeholder="Masukkan no telepon guru..."></x-input>
            </div>
        </div>
        <div class="flex flex-row gap-3">
            <a href="{{ route('admin.guru.index') }}" class="button-secondary" type="submit">Cancel</a>
        </div>

    </div>
</x-dashboard-layout>
