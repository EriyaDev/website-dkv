<x-dashboard-layout>
    <div class="flex flex-row items-center">
        <a href="" class="breadcrumbs-inactive">Mata Pelajaran</a>
        <h1 class="breadcrumbs-inactive">/</h1>
        <h1 class="breadcrumbs-active">Create</h1>
    </div>

    <div class="box-dashboard">
        <form action="{{ url('admin/mapel') }}" method="POST">
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
            <div class="input-container !grid-cols-1">
                <div class="input-group">
                    <x-label for="name">Nama Mata Pelajaran</x-label>
                    <x-input id="name" type="text" :disabled="false" name="nama_mapel" value=""
                        placeholder="Masukan nama mapel"></x-input>
                </div>
            </div>
            <div class="flex flex-row gap-3">
                <a href="{{ url('admin/mapel') }}" class="button-secondary" type="submit">Cancel</a>
                <button class="button-primary" type="submit">Confirm</button>
            </div>
        </form>
    </div>
</x-dashboard-layout>
