<x-dashboard-layout>
    <div class="flex flex-row items-center">
        <a href="{{ url('admin/jam-pelajaran') }}" class="breadcrumbs-inactive">Jam Pelajaran</a>
        <h1 class="breadcrumbs-inactive">/</h1>
        <h1 class="breadcrumbs-active">Edit</h1>
    </div>

    <div class="box-dashboard">
        <form action="{{ url('admin/jam-pelajaran/' . $data->id) }}" method="POST">
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
                    <x-label for="jam_pelajaran_ke">Jam Pelajaran Ke</x-label>
                    <x-input id="jam_pelajaran_ke" type="number" :disabled="false" name="jam_pelajaran_ke"
                        value="{{ $data->jam_pelajaran_ke }}" placeholder="Masukan jam pelajaran"></x-input>
                </div>
                <div class="input-group">
                    <x-label for="jam_mulai">Jam Mulai</x-label>
                    <x-input id="jam_mulai" type="time" :disabled="false" name="jam_mulai"
                        value="{{ $jam_mulai }}" placeholder="Masukan jam mulai"></x-input>
                </div>
                <div class="input-group">
                    <x-label for="jam_selesai">Jam Selesai</x-label>
                    <x-input id="jam_selesai" type="time" :disabled="false" name="jam_selesai"
                        value="{{ $jam_selesai }}" placeholder="Masukan jam selesai"></x-input>
                </div>
            </div>
            <div class="flex flex-row gap-3">
                <a href="{{ url('admin/jam-pelajaran') }}" class="button-secondary" type="submit">Cancel</a>
                <button class="button-primary" type="submit">Confirm</button>
            </div>
        </form>
    </div>
</x-dashboard-layout>
