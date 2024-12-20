@props(['color'])

<span
    class="bg-{{ $color }}-100 text-{{ $color }}-800 text-xs font-medium items-center px-2.5 py-0.5 rounded dark:bg-{{ $color }}-200 dark:text-{{ $color }}-800 hover:underline">
    {{ $slot }}
</span>
