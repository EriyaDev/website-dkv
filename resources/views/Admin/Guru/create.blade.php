<x-dashboard-layout>
    <div class="flex flex-row items-center">
        <a href="" class="breadcrumbs-inactive">Guru</a>
        <h1 class="breadcrumbs-inactive">/</h1>
        <h1 class="breadcrumbs-active">Buat</h1>
    </div>



    <div class="box-dashboard">
        <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
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
                    <x-label for="nip">NIP</x-label>
                    <x-input id="nip" type="number" :disabled="false" :required="true" name="nip"
                        value="" placeholder="Masukkan NIP guru..."></x-input>
                </div>
                <div class="input-group">
                    <x-label for="nama">Nama</x-label>
                    <x-select-option name="user_id" id="nama" :disabled="false" :required="true">
                        <option value="" selected disabled>--Pilih Guru--</option>
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                        @endforeach
                    </x-select-option>
                </div>
                <div class="input-group">
                    <x-label for="jenis_kelamin">Jenis Kelamin</x-label>
                    <x-select-option name="jenis_kelamin" id="jenis_kelamin" :disabled="false" :required="true">
                        <option value="" selected disabled>--Pilih Jenis Kelamin--</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </x-select-option>
                </div>
                <div class="input-group">
                    <x-label for="foto">Foto</x-label>
                    <x-input id="foto" name="foto" type="file" :disabled="false" :required="false"
                        value="" placeholder="Masukkan foto guru..."></x-input>
                </div>
                <div class="input-group">
                    <x-label for="alamat">Alamat</x-label>
                    <x-input id="alamat" type="text" :disabled="false" :required="true" name="alamat"
                        value="" placeholder="Masukkan alamat guru..."></x-input>
                </div>
                <div class="input-group">
                    <x-label for="no_telepon">No. Telepon</x-label>
                    <x-input id="no_telepon" type="tel" :disabled="false" :required="false" name="no_telepon"
                        value="" placeholder="Masukkan no telepon guru..."></x-input>
                </div>
            </div>
            <div class="flex flex-row gap-3">
                <a href="{{ route('admin.guru.index') }}" class="button-secondary" type="submit">Cancel</a>
                <button class="button-primary" type="submit">Confirm</button>
            </div>
        </form>
    </div>
</x-dashboard-layout>
