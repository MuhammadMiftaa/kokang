<x-layout>
    <x-slot:title>{{ ucfirst($type) }}</x-slot>
    {{-- <h1 class="text-6xl font-quentico">{{ request()->path() }}</h1> --}}~
    <x-product />
</x-layout>
