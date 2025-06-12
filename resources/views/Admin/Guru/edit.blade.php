<x-dashboard-layout>
    <div class="flex flex-row items-center">
        <a href="" class="breadcrumbs-inactive">Guru</a>
        <h1 class="breadcrumbs-inactive">/</h1>
        <h1 class="breadcrumbs-active">Edit</h1>
    </div>

    <div class="box-dashboard">

        <form action="{{ route('admin.guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

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
                        value="{{ old('nip', $guru->nip) }}" placeholder="Masukkan NIP guru..."></x-input>
                </div>
                <div class="input-group">
                    <x-label for="nama">Nama</x-label>
                    <select name="user_id" id="nama" required
                        class="chosen-select bg-secondary-color placeholder-inactive-color border border-border-color text-sm rounded-lg focus:ring-accent-color outline-accent-color focus:border-accent-color block w-full p-2.5 disabled:text-text-secondary-color disabled:brightness-[.98]">
                        <option value="" selected disabled>--Pilih Guru--</option>
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}" @if (old('user_id', $guru->user->id) == $teacher->user_id) selected @endif>
                                {{ $teacher->user->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="input-group">
                    <x-label for="nama">Nama</x-label>
                    <x-select-option name="user_id" id="nama" :disabled="false" :required="true">
                        <option value="" selected disabled>--Pilih Guru--</option>
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}" @if (old('user_id', $guru->user->id) == $teacher->user_id) selected @endif>
                                {{ $teacher->user->name }}</option>
                        @endforeach
                    </x-select-option>
                </div> --}}
                <div class="input-group">
                    <x-label for="jenis_kelamin">Jenis Kelamin</x-label>
                    <x-select-option name="jenis_kelamin" id="jenis_kelamin" :disabled="false" :required="true">
                        <option value="" selected disabled>--Pilih Jenis Kelamin--</option>
                        <option value="Laki-laki" @if (old('jenis_kelamin', $guru->jenis_kelamin) == 'Laki-laki') selected @endif>Laki-laki</option>
                        <option value="Perempuan" @if (old('jenis_kelamin', $guru->jenis_kelamin) == 'Perempuan') selected @endif>Perempuan</option>
                    </x-select-option>
                </div>
                <div class="input-group">
                    <x-label for="foto">Foto</x-label>
                    <x-input id="foto" type="file" :disabled="false" :required="false" name="foto"
                        value="" placeholder="Masukkan foto guru..."></x-input>
                </div>
                <div class="input-group">
                    <x-label for="alamat">Alamat</x-label>
                    <x-input id="alamat" type="text" :disabled="false" :required="true" name="alamat"
                        value="{{ old('alamat', $guru->alamat) }}" placeholder="Masukkan alamat guru..."></x-input>
                </div>
                <div class="input-group">
                    <x-label for="no_telepon">No. Telepon</x-label>
                    <x-input id="no_telepon" type="tel" :disabled="false" :required="false" name="no_telepon"
                        value="{{ old('no_telepon', $guru->no_telepon) }}"
                        placeholder="Masukkan no telepon guru..."></x-input>
                </div>
            </div>
            <div class="flex flex-row gap-3">
                <a href="{{ route('admin.guru.index') }}" class="button-secondary" type="submit">Cancel</a>
                <button class="button-primary" type="submit">Confirm</button>
            </div>
        </form>
    </div>
</x-dashboard-layout>
