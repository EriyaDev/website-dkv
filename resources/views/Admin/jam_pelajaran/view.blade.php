<x-dashboard-layout>
    <div class="flex flex-row items-center">
        <a href="{{ url('admin/jam-pelajaran') }}" class="breadcrumbs-inactive">Jam Pelajaran</a>
        <h1 class="breadcrumbs-inactive">/</h1>
        <h1 class="breadcrumbs-active">Edit</h1>
    </div>

    <div class="box-dashboard">
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="input-container">
                <div class="input-group">
                    <x-label for="jam_pelajaran_ke">Jam Pelajaran Ke</x-label>
                    <x-input id="jam_pelajaran_ke" type="number" :disabled="true" name="jam_pelajaran_ke"
                        value="{{ $data->jam_pelajaran_ke }}" placeholder="Masukan jam pelajaran"></x-input>
                </div>
                <div class="input-group">
                    <x-label for="jam_mulai">Jam Mulai</x-label>
                    <x-input id="jam_mulai" type="time" :disabled="true" name="jam_mulai"
                        value="{{ $jam_mulai }}" placeholder="Masukan jam mulai"></x-input>
                </div>
                <div class="input-group">
                    <x-label for="jam_selesai">Jam Selesai</x-label>
                    <x-input id="jam_selesai" type="time" :disabled="true" name="jam_selesai"
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
