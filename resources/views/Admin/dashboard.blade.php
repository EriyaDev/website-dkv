<x-dashboard-layout>
    <div class="flex flex-row items-center">
        <a href="" class="breadcrumbs-inactive">Guru</a>
        <h1 class="breadcrumbs-inactive">/</h1>
        <h1 class="breadcrumbs-active">Create</h1>
    </div>

    <div class="box-dashboard">
        <form action="" method="POST">
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
                    <x-label for="name">Name</x-label>
                    <x-input id="name" type="text" :disabled="false" name="name" value=""
                        placeholder="Enter member name..."></x-input>
                </div>
                <div class="input-group">
                    <x-label for="desc">Phone Number</x-label>
                    <x-input id="desc" type="tel" :disabled="false" name="phone_number" value=""
                        placeholder="Enter member phone number..."></x-input>
                </div>
            </div>
            <div class="flex flex-row gap-3">
                <a href="{{ route('admin.dashboard') }}" class="button-secondary" type="submit">Cancel</a>
                <button class="button-primary" type="submit">Confirm</button>
            </div>
        </form>
    </div>
</x-dashboard-layout>
