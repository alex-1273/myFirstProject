<x-layout>
    <x-slot:heading>
        Sorted Fruits
    </x-slot:heading>

    <ul>
        @foreach ($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>
</x-layout>
