@props(['disabled' => false, 'id' => '', 'placeholder' => '', 'value' => '', 'name' => '', 'type' => ''])


<input {{ $disabled ? 'disabled' : '' }} type="{{ $type }}" id="{{ $id }}"
    placeholder="{{ $placeholder }}" value="{{ $value }}" name="{{ $name }}" required autocomplete="off"
    class="{{ $disabled ? 'text-inactive-color' : 'text-text-primary-color' }} bg-secondary-color placeholder-inactive-color border-2 border-border-color text-sm rounded-lg focus:ring-accent-color outline-accent-color focus:border-accent-color block w-full p-2.5 disabled:text-text-secondary-color disabled:brightness-95">
