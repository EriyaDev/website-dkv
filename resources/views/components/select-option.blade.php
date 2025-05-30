@props(['disabled' => false, 'id' => '', 'name' => ''])

<select name="{{ $name }}" id="{{ $id }}" {{ $disabled ? 'disabled' : '' }}
    class="{{ $disabled ? 'text-inactive-color' : 'text-text-primary-color' }} bg-secondary-color placeholder-inactive-color border border-border-color text-sm rounded-lg focus:ring-accent-color outline-accent-color focus:border-accent-color block w-full p-2.5 disabled:text-text-secondary-color disabled:brightness-95">
    {{ $slot }}
</select>
