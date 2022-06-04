<x-layout title="{{ $title }}">

    <main class="d-flex">
        <x-sidebar-user />
        <div class="container m-5">
            {{ $slot }}
        </div>
    </main>

</x-layout>
