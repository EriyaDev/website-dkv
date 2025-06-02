@props(['id' => '', 'name' => '', 'disabled' => false])

<input type="text" id="{{ $id }}" name="{{ $name }}" {{ $disabled ? 'disabled' : '' }}
    placeholder="{{ $slot }}" class="border border-accent-color ">
