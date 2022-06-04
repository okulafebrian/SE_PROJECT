<x-layout title="{{ $title }}">

    <x-navbar></x-navbar>

    <main>
        <div>
            {{ $slot }}
        </div>
    </main>

</x-layout>
